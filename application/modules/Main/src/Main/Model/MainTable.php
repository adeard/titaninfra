<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     MainModule
 */

namespace Main\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Select,
	Zend\Db\Sql\Sql,
	Zend\Db\Sql\Where,
	Zend\Db\Sql\Delete;

class MainTable extends AbstractTableGateway
{
    protected $table = 'IMAGES';
	protected $adapter;
	protected $connection;

    public function __construct(Adapter $adapter)
    {
        $this->adapter 		= $adapter;
        
		$this->sql 			= new Sql($this->adapter);
		$this->connection 	= $this->adapter->getDriver()->getConnection();
		
		$this->initialize();
    }
	
    public function fetchAll()
	{
		$select 	= $this->sql->select();
		
		$select->from($this->table)
			   ->columns(array('IDIMAGE', 'TITLE', 'KETERANGAN', 'USERFILES'));
		
		$where 		= new  Where();
        $where->equalTo('STATUS', 'A');
        $select->where($where);
		
		//echo $select->getSqlString($this->adapter->getPlatform());
		//exit();
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		return $result->toArray();
		
	}

}