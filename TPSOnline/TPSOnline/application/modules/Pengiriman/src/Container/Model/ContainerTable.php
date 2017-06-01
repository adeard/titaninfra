<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     PengirimanModule
 */

namespace Pengiriman\Container\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Select,
	Zend\Db\Sql\Sql,
	Zend\Db\Sql\Where,
	Zend\Db\Sql\Delete,
	Zend\Db\Sql\TableIdentifier;

class ContainerTable extends AbstractTableGateway
{
    protected $table;
	protected $adapter;
	public $connection;

    public function __construct(Adapter $adapter)
    {
        $this->adapter 		= $adapter;
        
		$this->sql 			= new Sql($this->adapter);
		$this->connection 	= $this->adapter->getDriver()->getConnection();
		$this->table 		= new TableIdentifier('COARRICODECO', SCHEMA_TPS);
		$this->initialize();
    }
	
	public function getLastReff($data)
	{
		$sql 		= ' SELECT "REF_NUMBER"
				   		FROM tps."COARRICODECO"
						WHERE substring("REF_NUMBER",0,11) = '."'".$data['KD_TPS'].date("ymd")."'".'
				   		ORDER BY "REF_NUMBER" DESC';
	   
		$sQuery 	= $this->adapter->query($sql)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		if($result->current())
		{
			$LastId		= substr($result->current()->REF_NUMBER,10,4) + 1;
			$LastId		= substr($result->current()->REF_NUMBER,0,10).sprintf('%04d',$LastId);
		}else{
			$LastId 	= $data['KD_TPS'].date("ymd").'0001';
		}

		return $LastId;

	}
	
	public function fetchAll($param)
    {
		$select 	= $this->sql->select();
		$selrows 	= $this->sql->select();
		
		$aColumns 	= array('a.ID_COARRICODECO', 
							'a.ID_COARRICODECO',
							'a.REF_NUMBER',
							'b.NM_DOK',
							'a.KD_TPS',
							'a.NM_ANGKUT',
							'a.NO_VOY_FLIGHT',
							'a.CALL_SIGN',
							'a.TGL_TIBA',
							'a.KD_GUDANG',
							'a.IS_REGISTER',
						    'a.IDPERUSAHAAN');
		
		/** PAGING */
		$sLimit  = "";
		$sOffset = "";
		if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
		{
			$sLimit  = $_GET['iDisplayLength'];
			$sOffset = $_GET['iDisplayStart'];
		}
		
		/** ORDERING */
		$sOrder = "";
		if ( isset( $_GET['iSortCol_0'] ) )
		{
			for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ ){
				if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" ){
					$sOrder .= $aColumns[ intval( $_GET['iSortCol_'.$i] ) ]." ".$_GET['sSortDir_'.$i].", ";
				}
			}
		}
		
		/** WHERE CLAUSA */	
		$sWhere = "";
		if ( isset($_GET['sSearch']) && $_GET['sSearch'] != "" )
		{
			$sWhere = "(";
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" ){
					$sWhere .= '"'.$aColumns[$i].'"'." ILIKE '%". $_GET['sSearch'] ."%' OR ";
				}
			}
			
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere .= ")";
		}
		 
		/** INDIVIDUAL KOLOM FILTERING */
		for ( $i=0 ; $i<count($aColumns) ; $i++ )
		{
			if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != "" )
			{
				if ( $sWhere == "" ){
					$sWhere = "";
				}
				else{
					$sWhere .= " AND ";
				}
				$sWhere .= '"'.$aColumns[$i].'"'." ILIKE '%".$_GET['sSearch_'.$i]."%' ";
			}
		}
		
		if($sLimit != "")
		{
			$select->limit($sLimit);
			$selrows->limit($sLimit);
		}
		if($sOffset != "")
		{
			$select->offset($sOffset);
			$selrows->offset($sOffset);
		}
						  
		if($sOrder != "")
		{
			$select->order(array($sOrder));
			$selrows->order(array($sOrder));
		}
		
		if($sWhere != "")
		{
			$sWhere = str_replace('.', '"."', $sWhere);
			$select->where(array($sWhere), \Zend\Db\Sql\Predicate\PredicateSet::OP_OR);
			$selrows->where(array($sWhere), \Zend\Db\Sql\Predicate\PredicateSet::OP_OR);
		}
		
		/** WHERE CLAUSA CUSTOM */	
		$select->where(array('"a"."ID_SERVICE_TYPE" = 1
							 AND "a"."IDPERUSAHAAN" = '.$param['IDPERUSAHAAN'].' '),
					   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		$selrows->where(array('"a"."ID_SERVICE_TYPE" = 1
							 AND "a"."IDPERUSAHAAN" = '.$param['IDPERUSAHAAN'].' '),
						\Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		
		if($param['REF_NUMBER'] != ''):
			$select->where(array('"a"."REF_NUMBER" ILIKE '."'%".$param['REF_NUMBER']."%'".' '),
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
			$selrows->where(array('"a"."REF_NUMBER" ILIKE '."'%".$param['REF_NUMBER']."%'".' '), 
							\Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
		
		if($param['TGL_TIBA'] != ''):
			$select->where(array('"a"."TGL_TIBA" = '."'".$param['TGL_TIBA']."'".' '), 
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
			$selrows->where(array('"a"."TGL_TIBA" = '."'".$param['TGL_TIBA']."'".' '), 
							\Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
			
		
		$select->from(array('a' => $this->table))
			   ->columns(array('ID_COARRICODECO', 
							   'REF_NUMBER', 
							   'KD_DOK',
							   'KD_TPS', 
							   'NM_ANGKUT',
							   'NO_VOY_FLIGHT',
							   'CALL_SIGN', 
							   'TGL_TIBA', 
							   'KD_GUDANG',
							   'IS_REGISTER',
							   'IDPERUSAHAAN',
							   'STATUS'))
			   ->join(array('b' => new TableIdentifier('DOKUMEN', SCHEMA_TPS)), 'b.KD_DOK = a.KD_DOK',
					  array('NM_DOK'), $select::JOIN_LEFT);

		//echo $select->getSqlString($this->adapter->getPlatform());
		//exit();
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		$data = $result->toArray();
		
		$number		= 1;
		$row 		= array();
		
		foreach($data as $entry) {
			/**
			if($entry['STATUS'] == "A"){
				$status	= '<span style="color:#060; font-weight:bold">Active</span>';
			}else{
				$status	= '<span style="color:#900; font-weight:bold">Inactive</span>';
			}
			*/
			$action	= '	<a data-href="'.BASEPATH.'/pengiriman/container/edit/'.$entry['ID_COARRICODECO'].'" rel="tooltip" title="Edit" class="ajaxify">
							<button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
						</a> 
						
                       	<a data-href="'.BASEPATH.'/pengiriman/container/delete/'.$entry['ID_COARRICODECO'].'" rel="tooltip" title="Delete" class="delete">
							<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button> 
						</a>';
	   		
			$row[]	= array('<input type="checkbox" name="UID[]" id="UID" value="'.$entry['ID_COARRICODECO'].'" class="checkboxes">',
							$entry['ID_COARRICODECO'],
							$entry['REF_NUMBER'],
							$entry['NM_DOK'],
							$entry['KD_TPS'],
							$entry['NM_ANGKUT'],
							$entry['NO_VOY_FLIGHT'],
							$entry['CALL_SIGN'],
							$entry['TGL_TIBA'],
							$entry['KD_GUDANG'],
							$action
							);
			$number++;
		}
		
		/**	ROW COUNT */
		$iTotal = $this->jmlRows($param);
	   		
		if ( $sWhere != "" )
		{
			$selrows->from(array('a' => $this->table))
			   		->columns(array('ID_COARRICODECO'))
					->join(array('b' => new TableIdentifier('DOKUMEN', SCHEMA_TPS)), 'b.KD_DOK = a.KD_DOK',
						   array('ID_DOK'), $select::JOIN_LEFT);
			
			$sQueryTotal 		= $this->sql->prepareStatementForSqlObject($selrows)->execute();
			$rResultSetTotal 	= new ResultSet();
			$rResultTotal		= $rResultSetTotal->initialize($sQueryTotal);
			
			if (!$rResultTotal) {
				throw new \Exception("Could not find rows");
			}
			
			$iFilteredTotal = count(array_values(iterator_to_array($rResultTotal)));

    	}else{
        	$iFilteredTotal = $iTotal;
    	}
		
		$json	= json_encode(array("sEcho" =>intval($_GET['sEcho']),
							  "iTotalRecords" => $iTotal,
							  "iTotalDisplayRecords" => $iFilteredTotal,
							  "aaData" => $row));
		return $json;
		
	}
	
	public function jmlRows($param)
	{
		$select 	= $this->sql->select();
		
		$select->from(array('a' => $this->table))
			   ->columns(array('ID_COARRICODECO'))
			   ->join(array('b' => new TableIdentifier('DOKUMEN', SCHEMA_TPS)), 'b.KD_DOK = a.KD_DOK',
					  array('ID_DOK'), $select::JOIN_LEFT);
		
		$select->where(array('"a"."ID_SERVICE_TYPE" = 1
							 AND "a"."IDPERUSAHAAN" = '.$param['IDPERUSAHAAN'].' '),
					   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		
		if($param['REF_NUMBER'] != ''):
			$select->where(array('"a"."REF_NUMBER" ILIKE '."'%".$param['REF_NUMBER']."%'".' '), 
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
		
		if($param['TGL_TIBA'] != ''):
			$select->where(array('"a"."TGL_TIBA" = '."'".$param['TGL_TIBA']."'".' '), 
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
		
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
			return $rows;
		}else{
			return 0;
		}
	}

    public function getData($data)
	{
		$select 	= $this->sql->select();
		
		$select->from($this->table)
			   ->columns(array('ID_COARRICODECO',
				   			   'REF_NUMBER', 
							   'KD_DOK',
							   'KD_TPS', 
							   'NM_ANGKUT',
							   'NO_VOY_FLIGHT',
							   'CALL_SIGN', 
							   'TGL_TIBA', 
							   'KD_GUDANG',
							   'IS_REGISTER',
							   'STATUS'));
		
		$where 		= new  Where();
        $where->equalTo('ID_COARRICODECO', $data['ID_COARRICODECO']);
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
        $aColumns = array('REF_NUMBER' 		=> $data['REF_NUMBER'],
						  'IDPERUSAHAAN'	=> $data['IDPERUSAHAAN'],
						  'ID_SERVICE_TYPE'	=> $data['ID_SERVICE_TYPE'],
						  'KD_DOK'			=> $data['KD_DOK'],
						  'KD_TPS' 			=> $data['KD_TPS'],
						  'NM_ANGKUT' 		=> $data['NM_ANGKUT'],
						  'NO_VOY_FLIGHT'	=> $data['NO_VOY_FLIGHT'],
						  'CALL_SIGN' 		=> $data['CALL_SIGN'],
						  'TGL_TIBA' 		=> $data['TGL_TIBA'],
						  'KD_GUDANG' 		=> $data['KD_GUDANG'],
						  'CRBY' 			=> $data['CRBY'],
						  'CRDATE'			=> date("Y-m-d H:i:s"),
						  'MDBY' 			=> $data['MDBY'],
						  'MDDATE'			=> date("Y-m-d H:i:s"));

		$this->connection->beginTransaction();
	
		try {
			
			$sQuery	= $this->sql->insert($this->table)->values($aColumns);								
			$this->sql->prepareStatementForSqlObject($sQuery)->execute();
			//echo $sQuery->getSqlString($this->adapter->getPlatform()); exit();
			
			$this->connection->commit();
			
		} catch (Exception $e) {
			$this->connection->rollback();
		}
		
    }
	
	public function edit($data)
	{
		$aColumns = array('KD_DOK'			=> $data['KD_DOK'],
						  'KD_TPS' 			=> $data['KD_TPS'],
						  'NM_ANGKUT' 		=> $data['NM_ANGKUT'],
						  'NO_VOY_FLIGHT'	=> $data['NO_VOY_FLIGHT'],
						  'CALL_SIGN' 		=> $data['CALL_SIGN'],
						  'TGL_TIBA' 		=> $data['TGL_TIBA'],
						  'KD_GUDANG' 		=> $data['KD_GUDANG'],
						  'MDBY' 			=> $data['MDBY'],
						  'MDDATE'			=> date("Y-m-d H:i:s"));
		
		$this->connection->beginTransaction();
		
		try {
			
			$sQuery		= $this->sql->update($this->table)
									->set($aColumns)
									->where(array('ID_COARRICODECO' => $data['ID_COARRICODECO']));
								
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
		try 
		{
			$delete = $this->sql->delete($this->table);
			
			$where 		= new  Where();
			$where->equalTo('ID_COARRICODECO', $id);
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
			   ->columns(array('ID_COARRICODECO'));
		
		$where 		= new  Where();
        $where->equalTo('ID_COARRICODECO', $data['ID_COARRICODECO']);
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
