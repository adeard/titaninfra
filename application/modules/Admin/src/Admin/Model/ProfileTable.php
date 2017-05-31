<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     AdminModule
 */

namespace Admin\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Select,
	Zend\Db\Sql\Sql,
	Zend\Db\Sql\Where,
	Zend\Db\Sql\Delete;

class ProfileTable extends AbstractTableGateway
{
    protected $table = 'USERS';
	protected $adapter;
	public $connection;

    public function __construct(Adapter $adapter)
    {
        $this->adapter 		= $adapter;
        
		$this->sql 			= new Sql($this->adapter);
		$this->connection 	= $this->adapter->getDriver()->getConnection();
		
		$this->initialize();
    }
	
    public function getData($data)
	{
		$select 	= $this->sql->select();
		
		$select->from(array('a' => $this->table))
			   ->columns(array('IDUSER', 'IDGROUP', 'USERNAME', 'SECRETKEY'))
					  
			   ->join(array('b' => 'REF_IDENTITAS'), 'b.IDUSER = a.IDUSER',
			   		  array('IDIDENTITAS', 'NAMADEPAN', 'NAMABELAKANG', 
					  		'JNSKELAMIN', 'TMPLAHIR', 'TGLLAHIR', 'EMAIL', 
							'TELP', 'HP', 'EMAIL', 'USERFILES'), $select::JOIN_LEFT);
		
		$where 		= new  Where();
        $where->equalTo('a.IDUSER', $data['IDUSER']);
        $select->where($where);
		
		//echo $select->getSqlString($this->adapter->getPlatform());
		//exit();
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		$rows	= $result->current();
		return $rows;
		
	}
	
	public function edit($data)
	{
		$aColumns = array('PASSWORD' 		=> md5($data['PASSWORD']),
						  'SECRETKEY' 		=> $data['SECRETKEY'],
						  'TOKENID'			=> $data['TOKENID'],
						  'MDBY' 			=> $data['MDBY'],
						  'MDDATE'			=> date("Y-m-d H:i:s"));
		
		$sQuery		= $this->sql->update($this->table)
								->set($aColumns)
								->where(array('IDUSER' => $data['IDUSER']));
							
		$this->sql->prepareStatementForSqlObject($sQuery)->execute();
		
	}
	
	public function checkID($data)
	{	
        $select 	= $this->sql->select();
		
		$select->from($this->table)
			   ->columns(array('IDUSER'));
		
		$where 		= new  Where();
        $where->equalTo('IDUSER', $data['IDUSER']);
        $select->where($where);
		//echo $select->getSqlString($this->adapter->getPlatform());
		//exit();
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		$rows = count(array_values(iterator_to_array($result)));
		if($rows > 0)
		{
			return true;
		}else{
			return false;
		}
	}

}
