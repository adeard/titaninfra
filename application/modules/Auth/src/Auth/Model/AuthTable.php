<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     AuthModule
 */

namespace Auth\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Select,
	Zend\Db\Sql\Sql,
	Zend\Db\Sql\Where,
	Zend\Db\Sql\TableIdentifier;

use Zend\Crypt\Key\Derivation\Pbkdf2,
	Zend\Math\Rand;

use Browser\Browser,
 	Browser\Os;
	
class AuthTable extends AbstractTableGateway
{
    protected $table = 'USERS';
	protected $adapter;
	protected $connection;

    public function __construct(Adapter $adapter)
    {
        $this->adapter 		= $adapter;
        
		$this->sql 			= new Sql($this->adapter);
		$this->connection 	= $this->adapter->getDriver()->getConnection();
		
		$this->initialize();
    }
	
	public function getData($data)
	{
		
		$userid		= $data->IDUSER;
		$this->save($userid);
		
		$select 	= $this->sql->select();
		
		$select->from(array('a' => 'USERS'),
					  array('IDUSER', 'IDPERUSAHAAN', 'USERNAME', 'SECRETKEY', 'TOKENID', 'ISADMIN', 'FLAGS', 'STATUS'))
					  
			   ->join(array('b' => 'REF_IDENTITAS'), 'b.IDUSER = a.IDUSER',
			   		  array('IDIDENTITAS', 'NAMADEPAN', 'NAMABELAKANG', 'USERFILES'))
					  
			   ->join(array('c' => 'GROUP'), 'c.IDGROUP = a.IDGROUP',
			   		  array('IDGROUP', 'NAMAGROUP'))
				
			  ->join(array('d' => 'PERUSAHAAN'), 'd.IDPERUSAHAAN = a.IDPERUSAHAAN',
			   		  array('TPS_USERNAME', 'TPS_PASSWORD', 'FSTREAM', 'KD_ESEAL'));
		
		$where 		= new  Where();
        $where->equalTo('a.STATUS', 'A')
			  ->equalTo('a.IDUSER', $userid);
			  
        $select->where($where);
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
	
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find row");
        }
		
		return $result->current();
		
	}
	
	public function save($userid)
    {
		$salt 				= Rand::getBytes(32, true);
		$key  				= Pbkdf2::calc('sha256', $userid, $salt, 10000, 10);
		$token_id 			= bin2hex($key);
		$Browser 			= new Browser($_SERVER['HTTP_USER_AGENT']);
		$Os 				= new Os($_SERVER['HTTP_USER_AGENT']);
		
        $data = array(
            'LOGINTIME' 	=> date('Y-m-d H:i:s'),
            'LASTLOGIN' 	=> date('Y-m-d H:i:s'),
			'HOSTADDR'		=> $_SERVER['REMOTE_ADDR'],
			'LASTADDR'		=> $_SERVER['REMOTE_ADDR'],
			'TIMER'			=> date('Y-m-d H:i:s'),
			'LOGINSTATUS'	=> 1,
			'DETECT_OS'		=> $Os->getName()." ".$Os->getVersion(),
			'BROWSER'		=> $Browser->getName()." ".$Browser->getVersion(),
        );

		$this->connection->beginTransaction();
		
		try {
			$sQuery		= $this->sql->update('USERS_ACTIVITY')
									->set($data)
									->where(array('IDUSER' => $userid));
			
			$setToken	= $this->sql->update('USERS')
									->set(array('TOKENID'  => $token_id))
									->where(array('IDUSER' => $userid));
								
			$this->sql->prepareStatementForSqlObject($sQuery)->execute();
			$this->sql->prepareStatementForSqlObject($setToken)->execute();
			
			$this->connection->commit();
			
		} catch (Exception $e) {
			$this->connection->rollback();
		}
		
    }
	
	public function logout($userid)
    {
        $data = array(
            'LOGOUT' 		=> date('Y-m-d H:i:s'),
			'TIMER'			=> date('Y-m-d H:i:s'),
            'LOGINSTATUS' 	=> 3,
        );

		$this->connection->beginTransaction();
		try {
			$sQuery		= $this->sql->update('USERS_ACTIVITY')
									->set($data)
									->where(array('IDUSER' => $userid));
								
			$this->sql->prepareStatementForSqlObject($sQuery)->execute();
			
			$this->connection->commit();
			
		} catch (Exception $e) {
			$this->connection->rollback();
		}
		
    }
	
	public function idle($userid)
    {
        $data = array(
            'LOGINSTATUS' 	=> 2,
        );

		$this->connection->beginTransaction();
		try {
			$sQuery		= $this->sql->update('USERS_ACTIVITY')
									->set($data)
									->where(array('IDUSER' => $userid));
								
			$this->sql->prepareStatementForSqlObject($sQuery)->execute();
			
			$this->connection->commit();
			
		} catch (Exception $e) {
			$this->connection->rollback();
		}
		
    }
	
	public function checkTokenId($token_id)
	{
		$select 	= $this->sql->select();
		
		$select->from('USERS')
			   ->columns(array("IDUSER"));
	
		$where 		= new  Where();
        $where->equalTo('TOKENID', $token_id);
        $select->where($where);
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
	
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find row");
        }
		
		$rows = array_values(iterator_to_array($result));
		if(count($rows) > 0 ){
			return true;
		}else{
			return false;
		}
	}
	
	/** Check previledge modules */
	public function check($user_id, $page_id, $do =NULL)
	{
		$select 	= $this->sql->select();
		
		$select->from(array('a' => 'GROUP'),
					  array('IDGROUP'))
			   ->join(array('b' => 'REF_ROLES'), 'b.IDGROUP = a.IDGROUP',
			   		  array('IDGROUP'));
		
		$where 		= new  Where();
        $where->equalTo('b.IDMODUL', $page_id)
			  ->equalTo('b.'.$do, 1)
			  ->equalTo('b.IDUSER', $user_id);
			  
        $select->where($where);
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
	
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find row");
        }
		
		$rows = array_values(iterator_to_array($result));
		if(count($rows) > 0 ){
			return true;
		}else{
			return false;
		}
	}
	
	/** Logs
	* set logs users
	*/
	/**
	public function logs($data)
	{
		$aColumns = array('user_id' 		=> $data['user_id'],
						  'logtime'			=> date("Y-m-d H:i:s"),
						  'username' 		=> $data['username'],
						  'secretkey' 		=> $data['secretkey'],
						  'hostaddr'		=> $_SERVER['REMOTE_ADDR'],
						  'status' 			=> $data['status'],
						  'note' 			=> $data['note']);

		$this->connection->beginTransaction();
		
		try {
			
			$insert	= $this->sql->insert('logs')->values($aColumns);								
			$this->sql->prepareStatementForSqlObject($insert)->execute();
			$this->connection->commit();
			
		} catch (Exception $e) {
			$this->connection->rollback();
		}
		
	}
	*/
	public function forbidden(){

		echo '
		<script src="/public/jspath.js" type="text/javascript"></script>
    	<script src="/public/'.VIEW_THEMES.'/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
		<link href="/public/'.VIEW_THEMES.'/assets/global/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    	<script src="/public/'.VIEW_THEMES.'/assets/global/plugins/sweetalert/sweetalert-dev.js"></script>
		<script>
    		jQuery(document).ready(function() { 
				//alert("Administrator Area | Access Denied");
				//window.history.go(-1);
				sweetAlert({
					title: "Access Denied",
					text: "Administrator Area",
					type: "error"
				},
				
				function () {
					window.history.go(-1);
				});
				
			});
  		</script>
    	';

		exit();
	}
	
	public function invalidHandler(){
		echo '
		<script src="/public/jspath.js" type="text/javascript"></script>
    	<script src="/public/'.VIEW_THEMES.'/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
		<link href="/public/'.VIEW_THEMES.'/assets/global/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    	<script src="/public/'.VIEW_THEMES.'/assets/global/plugins/sweetalert/sweetalert-dev.js"></script>
		<script>
    		jQuery(document).ready(function() { 
				//alert("invalid definition");
				//window.location = "'.$url.'" ;
				sweetAlert({
					title: "Failed",
					text: "Invalid Definition",
					type: "error"
				},
				
				function () {
					window.history.go(-1);
				});
			});
  		</script>
    	';
		exit();
	}

}
