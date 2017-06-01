<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     DokumenModule
 */

namespace Admin\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Select,
	Zend\Db\Sql\Sql,
	Zend\Db\Sql\Where,
	Zend\Db\Sql\Delete,
	Zend\Db\Sql\TableIdentifier;

class VehicleTable extends AbstractTableGateway
{
    protected $table;
	protected $adapter;
	public $connection;

    public function __construct(Adapter $adapter)
    {
        $this->adapter 		= $adapter;
        
		$this->sql 			= new Sql($this->adapter);
		$this->connection 	= $this->adapter->getDriver()->getConnection();
		$this->table 		= 'VEHICLE';
		
		$this->initialize();
    }
	
    public function getData($data)
	{
		$select 	= $this->sql->select();
		
		$select->from($this->table);
		
		$where 		= new  Where();
        $where->equalTo('IDVEHICLE', $data['IDVEHICLE']);
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
	
	public function save($data)
    {

       	$aColumns = array('ACTIVE' 			=> $data['ACTIVE'],
						  'INACTIVE'		=> $data['INACTIVE'],
						  'CRBY' 			=> $data['CRBY'],
						  'CRDATE'			=> date("Y-m-d H:i:s"),
						  'MDBY' 			=> $data['MDBY'],
						  'MDDATE'			=> date("Y-m-d H:i:s"));

		$this->connection->beginTransaction();
		
		try {
			
			$sQuery	= $this->sql->insert($this->table)->values($aColumns);								
			$this->sql->prepareStatementForSqlObject($sQuery)->execute();
			
			$this->connection->commit();
			
		} catch (Exception $e) {
			$this->connection->rollback();
		}

    }
	
	public function edit($data)
	{
		$aColumns = array('ACTIVE' 			=> $data['ACTIVE'],
						  'INACTIVE'		=> $data['INACTIVE'],
						  'MDBY' 			=> $data['MDBY'],
						  'MDDATE'			=> date("Y-m-d H:i:s"));
		
		$this->connection->beginTransaction();
		
		try {
			
			$sQuery		= $this->sql->update($this->table)
									->set($aColumns)
									->where(array('IDVEHICLE' => (int) $data['IDVEHICLE'] ));
								
			$this->sql->prepareStatementForSqlObject($sQuery)->execute();
			//echo $sQuery->getSqlString($this->adapter->getPlatform()); exit();
			$this->connection->commit();
			
			
		} catch (Exception $e) {
			$this->connection->rollback();
		}
	}
	
    public function delete($id)
    {
		$this->connection->beginTransaction();
		try {
			$delete = $this->sql->delete($this->table);
			
			$where 		= new  Where();
			$where->equalTo('IDVEHICLE', $id);
			$delete->where($where);
			
			//echo $delete->getSqlString($this->adapter->getPlatform()); exit();
			
			$this->executeDelete($delete);
			$this->connection->commit();
			
		} catch (Exception $e) {
			$this->connection->rollback();
		}
		
    }
	
	public function checkID($data)
	{	
        $select 	= $this->sql->select();
		
		$select->from($this->table)
			   ->columns(array('IDVEHICLE'));
		
		$where 		= new  Where();
        $where->equalTo('IDVEHICLE', $data['IDVEHICLE']);
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
