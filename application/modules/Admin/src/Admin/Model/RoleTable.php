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


class RoleTable extends AbstractTableGateway
{
    protected $table;
	protected $adapter;
	public $connection;

    public function __construct(Adapter $adapter)
    {
        $this->adapter 		= $adapter;
        
		$this->sql 			= new Sql($this->adapter);
		$this->connection 	= $this->adapter->getDriver()->getConnection();
		$this->table 		= 'REF_ROLES';
		
		$this->initialize();
    }
	
	public function fetchAllRoleGroup($param)
    {
		$select 	= $this->sql->select();
		$select->from(array('a' => "REF_ROLES_GROUP"))
			   ->columns(array('ORDINAL', 'IDMODUL', 'IDGROUP', 'ROLEADD', 'ROLEVIEW', 'ROLEEDIT', 'ROLEDEL', 'ROLERIP'))
			   ->order(array('a.IDMODUL ASC'))
			   ->join(array('b' => 'REF_MODUL'), 'b.IDMODUL = a.IDMODUL',
			   		  array('NAMAMODUL'), $select::JOIN_LEFT)
					  
			   ->join(array('c' => 'GROUP'), 'c.IDGROUP = a.IDGROUP',
			   		  array('NAMAGROUP'), $select::JOIN_LEFT);
		
		$where 		= new  Where();
        $where->equalTo('a.ORDINAL', $param['ORDINAL'])
			  ->equalTo('a.IDGROUP', $param['IDGROUP']);
        $select->where($where);
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		return $result->toArray();
	}
	
	public function fetchAllRoleUser($param)
    {
		$select 	= $this->sql->select();
		$select->from(array('a' => $this->table))
			   ->columns(array('ORDINAL', 'IDMODUL', 'IDGROUP', 'ROLEADD', 'ROLEVIEW', 'ROLEEDIT', 'ROLEDEL', 'ROLERIP'))
			   ->order(array('a.IDMODUL ASC'))
			   ->join(array('b' => 'REF_MODUL'), 'b.IDMODUL = a.IDMODUL',
			   		  array('NAMAMODUL'), $select::JOIN_LEFT)
					  
			   ->join(array('c' => 'GROUP'), 'c.IDGROUP = a.IDGROUP',
			   		  array('NAMAGROUP'), $select::JOIN_LEFT);
		
		$where 		= new  Where();
        $where->equalTo('a.ORDINAL', $param['ORDINAL'])
			  ->equalTo('a.IDUSER', $param['IDUSER'])
			  ->equalTo('a.IDGROUP', $param['IDGROUP']);
			  
        $select->where($where);
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		return $result->toArray();
	}
	
	public function jmlRowsRole($data)
	{
		$select 	= $this->sql->select();
		
		$select->from($this->table);
		
		$where 		= new  Where();
        $where->equalTo('IDMODUL', $data['IDMODUL'])
			  ->equalTo('IDUSER', $data['IDUSER']);
        $select->where($where);
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		$rows = array_values(iterator_to_array($result));
		return count($rows);

	}
	
	public function saveRole($data) 
	{	

		$aColumns = array('ORDINAL'			=> $data['ORDINAL'],
						  'IDMODUL' 		=> $data['IDMODUL'],
						  'IDUSER'			=> $data['IDUSER'],
						  'IDGROUP' 		=> $data['IDGROUP'],
						  'ROLEADD' 		=> $data['ROLEADD'],
						  'ROLEVIEW' 		=> $data['ROLEVIEW'],
						  'ROLEEDIT' 		=> $data['ROLEEDIT'],
						  'ROLEDEL' 		=> $data['ROLEDEL'],
						  'ROLERIP' 		=> $data['ROLERIP'],
						  'CRBY' 			=> $data['CRBY'],
						  'CRDATE'			=> date("Y-m-d H:i:s"),
						  'MDBY' 			=> $data['MDBY'],
						  'MDDATE'			=> date("Y-m-d H:i:s")
						  );
		
		$this->connection->beginTransaction();
		try {
			
			$sQuery	= $this->sql->insert($this->table)->values($aColumns);
			//echo $insert->getSqlString($this->adapter->getPlatform()); exit();								
			$this->sql->prepareStatementForSqlObject($sQuery)->execute();
			
			$this->connection->commit();

			
		} catch (Exception $e) {
			$this->connection->rollback();
		}
		
	}
	
	public function updateRole($data) 
	{
		if($this->jmlRowsRole($data) > 0)
		{
			$aColumns = array('ORDINAL'			=> $data['ORDINAL'],
							  'IDMODUL' 		=> $data['IDMODUL'],
							  'IDUSER'			=> $data['IDUSER'],
							  'IDGROUP' 		=> $data['IDGROUP'],
							  'ROLEADD' 		=> $data['ROLEADD'],
							  'ROLEVIEW' 		=> $data['ROLEVIEW'],
							  'ROLEEDIT' 		=> $data['ROLEEDIT'],
							  'ROLEDEL' 		=> $data['ROLEDEL'],
							  'ROLERIP' 		=> $data['ROLERIP'],
							  'MDBY' 			=> $data['MDBY'],
							  'MDDATE'			=> date("Y-m-d H:i:s")
							  );
			
			$this->connection->beginTransaction();
		
			try {
				
				$sQuery		= $this->sql->update($this->table)
										->set($aColumns)
										->where(array('IDMODUL'	=> (int) $data['IDMODUL'],
													  'IDUSER'	=> $data['IDUSER']));
									
				$this->sql->prepareStatementForSqlObject($sQuery)->execute();
				
				$this->connection->commit();
				
			} catch (Exception $e) {
				$this->connection->rollback();
			}

		}else{
			$this->saveRole($data);
		}
	}
	
	public function delete($id)
    {
		$sql 	= "DELETE FROM ".'"REF_ROLES"'." WHERE ".'"IDUSER"'."= '".$id."' ";
		$sQuery = $this->adapter->query($sql)->execute();
    }

}
