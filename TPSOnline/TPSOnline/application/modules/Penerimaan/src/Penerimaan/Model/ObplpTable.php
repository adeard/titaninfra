<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     PenerimaanModule
 */

namespace Penerimaan\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Select,
	Zend\Db\Sql\Sql,
	Zend\Db\Sql\Where,
	Zend\Db\Sql\Delete,
	Zend\Db\Sql\TableIdentifier;

class ObplpTable extends AbstractTableGateway
{
    protected $table;
	protected $adapter;
	public $connection;

    public function __construct(Adapter $adapter)
    {
        $this->adapter 		= $adapter;
        
		$this->sql 			= new Sql($this->adapter);
		$this->connection 	= $this->adapter->getDriver()->getConnection();
		$this->table 		= new TableIdentifier('OB', SCHEMA_TPS);
		$this->initialize();
    }
	
	public function fetchAll($param)
    {
		$select 	= $this->sql->select();
		$selrows 	= $this->sql->select();
		
		$aColumns 	= array('a.ID_OB',
							'a.ID_OB', 
							'a.KD_DOK',
							'a.TPS_ASAL',
							'a.NM_ANGKUT',
							'a.NO_VOY_FLIGHT',
							'a.CALL_SIGN',
							'a.TGL_TIBA',
							'a.GUDANG_TUJUAN',
							'a.NO_CONT',
							'a.UK_CONT',
							'a.NO_SEGEL',
							'a.JNS_CONT',
							'a.NO_A11',
							'a.TGL_A11',
							'a.NO_BL_AWB',
							'a.TGL_BL_AWB',
							'a.NO_MASTER_BL_AWB',
							'a.TGL_MASTER_BL_AWB',
							'a.ID_CONSIGNEE',
							'a.CONSIGNEE',
							'a.BRUTO',
							'a.NO_BC11',
							'a.TGL_BC11',
							'a.NO_POS_BC11',
							'a.ISO_CODE',
							'a.PEL_MUAT',
							'a.PEL_TRANSIT',
							'a.PEL_BONGKAR',
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
		$select->where(array('"a"."IDPERUSAHAAN" = '.$param['IDPERUSAHAAN'].' '),
					   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		$selrows->where(array('"a"."IDPERUSAHAAN" = '.$param['IDPERUSAHAAN'].' '),
						\Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
			
		
		$select->from(array('a' => $this->table))
			   ->columns(array( 'ID_OB', 
								'KD_DOK',
								'TPS_ASAL',
								'NM_ANGKUT',
								'NO_VOY_FLIGHT',
								'CALL_SIGN',
								'TGL_TIBA',
								'GUDANG_TUJUAN',
								'NO_CONT',
								'UK_CONT',
								'NO_SEGEL',
								'JNS_CONT',
								'NO_A11',
								'TGL_A11',
								'NO_BL_AWB',
								'TGL_BL_AWB',
								'NO_MASTER_BL_AWB',
								'TGL_MASTER_BL_AWB',
								'ID_CONSIGNEE',
								'CONSIGNEE',
								'BRUTO',
								'NO_BC11',
								'TGL_BC11',
								'NO_POS_BC11',
								'ISO_CODE',
								'PEL_MUAT',
								'PEL_TRANSIT',
								'PEL_BONGKAR',
								'IDPERUSAHAAN'));

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
			$action	= '	<a data-href="'.BASEPATH.'/penerimaan/obplp/detail/'.$entry['ID_OB'].'" rel="tooltip" title="Detail" class="ajaxify">
							<button class="btn btn-primary btn-sm"><i class="fa fa-search"></i></button>
						</a>';
	   		
			$row[]	= array('<input type="checkbox" name="UID[]" id="UID" value="'.$entry['ID_OB'].'" class="checkboxes">',
							$entry['ID_OB'],
							$entry['KD_DOK'],
							$entry['TPS_ASAL'],
							$entry['NM_ANGKUT'],
							$entry['NO_VOY_FLIGHT'],
							$entry['CALL_SIGN'],
							$entry['TGL_TIBA'],
							$entry['GUDANG_TUJUAN'],
							$entry['NO_CONT'],
							$entry['UK_CONT'],
							$entry['NO_SEGEL'],
							$entry['JNS_CONT'],
							$entry['NO_A11'],
							$entry['TGL_A11'],
							$entry['NO_BL_AWB'],
							$entry['TGL_BL_AWB'],
							$entry['NO_MASTER_BL_AWB'],
							$entry['TGL_MASTER_BL_AWB'],
							$entry['ID_CONSIGNEE'],
							$entry['CONSIGNEE'],
							$entry['BRUTO'],
							$entry['NO_BC11'],
							$entry['TGL_BC11'],
							$entry['NO_POS_BC11'],
							$entry['ISO_CODE'],
							$entry['PEL_MUAT'],
							$entry['PEL_TRANSIT'],
							$entry['PEL_BONGKAR'],
							$action
							);
			$number++;
		}
		
		/**	ROW COUNT */
		$iTotal = $this->jmlRows($param);
	   		
		if ( $sWhere != "" )
		{
			$selrows->from(array('a' => $this->table))
			   		->columns(array('ID_OB'));
			
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
			   ->columns(array('ID_OB'));
		
		$select->where(array('"a"."IDPERUSAHAAN" = '.$param['IDPERUSAHAAN'].' '),
					   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		
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
		
		$select->from($this->table);
		
		$where 		= new  Where();
        $where->equalTo('ID_OB', $data['ID_OB']);
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
        $aColumns = array(	'IDPERUSAHAAN'		=> $data['IDPERUSAHAAN'],
						  	'KD_DOK' 			=> $data['KD_DOK'],
							'TPS_ASAL' 			=> $data['TPS_ASAL'],
							'NM_ANGKUT' 		=> $data['NM_ANGKUT'],
							'NO_VOY_FLIGHT' 	=> $data['NO_VOY_FLIGHT'],
							'CALL_SIGN' 		=> $data['CALL_SIGN'],
							'TGL_TIBA' 			=> $data['TGL_TIBA'],
							'GUDANG_TUJUAN' 	=> $data['GUDANG_TUJUAN'],
							'NO_CONT' 			=> $data['NO_CONT'],
							'UK_CONT' 			=> $data['UK_CONT'],
							'NO_SEGEL' 			=> $data['NO_SEGEL'],
							'JNS_CONT' 			=> $data['JNS_CONT'],
							'NO_A11' 			=> $data['NO_A11'],
							'TGL_A11' 			=> $data['TGL_A11'],
							'NO_BL_AWB' 		=> $data['NO_BL_AWB'],
							'TGL_BL_AWB' 		=> $data['TGL_BL_AWB'],
							'NO_MASTER_BL_AWB' 	=> $data['NO_MASTER_BL_AWB'],
							'TGL_MASTER_BL_AWB' => $data['TGL_MASTER_BL_AWB'],
							'ID_CONSIGNEE' 		=> $data['ID_CONSIGNEE'],
							'CONSIGNEE' 		=> $data['CONSIGNEE'],
							'BRUTO' 			=> $data['BRUTO'],
							'NO_BC11' 			=> $data['NO_BC11'],
							'TGL_BC11' 			=> $data['TGL_BC11'],
							'NO_POS_BC11' 		=> $data['NO_POS_BC11'],
							'ISO_CODE' 			=> $data['ISO_CODE'],
							'PEL_MUAT' 			=> $data['PEL_MUAT'],
							'PEL_TRANSIT' 		=> $data['PEL_TRANSIT'],
							'PEL_BONGKAR' 		=> $data['PEL_BONGKAR'],
						  	'CRBY' 				=> $data['CRBY'],
						  	'CRDATE'			=> date("Y-m-d H:i:s"),
						  	'MDBY' 				=> $data['MDBY'],
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
		$aColumns = array(	'IDPERUSAHAAN'		=> $data['IDPERUSAHAAN'],
						  	'KD_DOK' 			=> $data['KD_DOK'],
							'TPS_ASAL' 			=> $data['TPS_ASAL'],
							'NM_ANGKUT' 		=> $data['NM_ANGKUT'],
							'NO_VOY_FLIGHT' 	=> $data['NO_VOY_FLIGHT'],
							'CALL_SIGN' 		=> $data['CALL_SIGN'],
							'TGL_TIBA' 			=> $data['TGL_TIBA'],
							'GUDANG_TUJUAN' 	=> $data['GUDANG_TUJUAN'],
							'NO_CONT' 			=> $data['NO_CONT'],
							'UK_CONT' 			=> $data['UK_CONT'],
							'NO_SEGEL' 			=> $data['NO_SEGEL'],
							'JNS_CONT' 			=> $data['JNS_CONT'],
							'NO_A11' 			=> $data['NO_A11'],
							'TGL_A11' 			=> $data['TGL_A11'],
							'NO_BL_AWB' 		=> $data['NO_BL_AWB'],
							'TGL_BL_AWB' 		=> $data['TGL_BL_AWB'],
							'NO_MASTER_BL_AWB' 	=> $data['NO_MASTER_BL_AWB'],
							'TGL_MASTER_BL_AWB' => $data['TGL_MASTER_BL_AWB'],
							'ID_CONSIGNEE' 		=> $data['ID_CONSIGNEE'],
							'CONSIGNEE' 		=> $data['CONSIGNEE'],
							'BRUTO' 			=> $data['BRUTO'],
							'NO_BC11' 			=> $data['NO_BC11'],
							'TGL_BC11' 			=> $data['TGL_BC11'],
							'NO_POS_BC11' 		=> $data['NO_POS_BC11'],
							'ISO_CODE' 			=> $data['ISO_CODE'],
							'PEL_MUAT' 			=> $data['PEL_MUAT'],
							'PEL_TRANSIT' 		=> $data['PEL_TRANSIT'],
							'PEL_BONGKAR' 		=> $data['PEL_BONGKAR'],
						  	'MDBY' 				=> $data['MDBY'],
						  	'MDDATE'			=> date("Y-m-d H:i:s"));
		
		$this->connection->beginTransaction();
		
		try {
			
			$sQuery		= $this->sql->update($this->table)
									->set($aColumns)
									->where(array('ID_OB' => $data['ID_OB']));
								
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
			$where->equalTo('ID_OB', $id);
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
			   ->columns(array('ID_OB'));
		
		$where 		= new  Where();
        $where->equalTo('ID_OB', $data['ID_OB']);
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
