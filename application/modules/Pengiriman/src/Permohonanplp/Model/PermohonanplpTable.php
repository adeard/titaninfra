<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     PengirimanModule
 */

namespace Pengiriman\Permohonanplp\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Select,
	Zend\Db\Sql\Sql,
	Zend\Db\Sql\Where,
	Zend\Db\Sql\Delete,
	Zend\Db\Sql\TableIdentifier;

class PermohonanplpTable extends AbstractTableGateway
{
    protected $table;
	protected $adapter;
	public $connection;

    public function __construct(Adapter $adapter)
    {
        $this->adapter 		= $adapter;
        
		$this->sql 			= new Sql($this->adapter);
		$this->connection 	= $this->adapter->getDriver()->getConnection();
		$this->table 		= new TableIdentifier('PLP', SCHEMA_TPS);
		$this->initialize();
    }
	
	public function getLastReff($data)
	{
		$sql 		= ' SELECT "REF_NUMBER"
				   		FROM '.SCHEMA_TPS.'."PLP"
						WHERE substring("REF_NUMBER",0,11) = '."'".$data['KD_TPS_ASAL'].date("ymd")."'".'
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
			$LastId 	= $data['KD_TPS_ASAL'].date("ymd").'0001';
		}

		return $LastId;

	}
	
	public function fetchAll($param)
    {
		$select 	= $this->sql->select();
		$selrows 	= $this->sql->select();
		
		$aColumns 	= array('a.ID_PLP', 
							'a.ID_PLP',
							'a.KD_KANTOR',
							'a.TIPE_DATA',
							'a.KD_TPS_ASAL',
							'a.REF_NUMBER',
							'a.NO_SURAT',
							'a.TGL_SURAT',
							'a.GUDANG_ASAL',
							'a.KD_TPS_TUJUAN',
							'a.GUDANG_TUJUAN',
							'a.KD_ALASAN_PLP',
							'a.YOR_ASAL',
							'a.YOR_TUJUAN',
							'a.CALL_SIGN',
							'a.NM_ANGKUT',
							'a.NO_VOY_FLIGHT',
							'a.TGL_TIBA',
							'a.NO_BC11',
							'a.TGL_BC11',
							'a.NM_PEMOHON',
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
		$select->where(array('"a"."IDPERUSAHAAN" = '.$param['IDPERUSAHAAN'].' AND
							  "a"."ID_SERVICE_TYPE" = 121 '),
					   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		$selrows->where(array('"a"."IDPERUSAHAAN" = '.$param['IDPERUSAHAAN'].' AND
							   "a"."ID_SERVICE_TYPE" = 121 '),
						\Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		
		$select->from(array('a' => $this->table))
			   ->columns(array( 'ID_PLP',
								'KD_KANTOR',
								'TIPE_DATA',
								'KD_TPS_ASAL',
								'REF_NUMBER',
								'NO_SURAT',
								'TGL_SURAT',
								'GUDANG_ASAL',
								'KD_TPS_TUJUAN',
								'GUDANG_TUJUAN',
								'KD_ALASAN_PLP',
								'YOR_ASAL',
								'YOR_TUJUAN',
								'CALL_SIGN',
								'NM_ANGKUT',
								'NO_VOY_FLIGHT',
								'TGL_TIBA',
								'NO_BC11',
								'TGL_BC11',
								'NM_PEMOHON',
							   	'IDPERUSAHAAN',
							   	'STATUS'));

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
			$action	= '	<a data-href="'.BASEPATH.'/pengiriman/permohonanplp/edit/'.$entry['ID_PLP'].'" rel="tooltip" title="Edit" class="ajaxify">
							<button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
						</a> 
						
                       	<a data-href="'.BASEPATH.'/pengiriman/permohonanplp/delete/'.$entry['ID_PLP'].'" rel="tooltip" title="Delete" class="delete">
							<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button> 
						</a>';
	   		
			$row[]	= array('<input type="checkbox" name="UID[]" id="UID" value="'.$entry['ID_PLP'].'" class="checkboxes">',
							$entry['ID_PLP'],
							'<a data-href="'.BASEPATH.'/pengiriman/permohonanplp/edit/'.$entry['ID_PLP'].'" rel="tooltip" title="Edit" class="ajaxify">'.$entry['KD_KANTOR'].'</a>',
							$entry['TIPE_DATA'],
							$entry['KD_TPS_ASAL'],
							$entry['REF_NUMBER'],
							$entry['NO_SURAT'],
							$entry['TGL_SURAT'],
							$entry['GUDANG_ASAL'],
							$entry['KD_TPS_TUJUAN'],
							$entry['GUDANG_TUJUAN'],
							$entry['KD_ALASAN_PLP'],
							$entry['YOR_ASAL'],
							$entry['YOR_TUJUAN'],
							$entry['CALL_SIGN'],
							$entry['NM_ANGKUT'],
							$entry['NO_VOY_FLIGHT'],
							$entry['TGL_TIBA'],
							$entry['NO_BC11'],
							$entry['TGL_BC11'],
							$entry['NM_PEMOHON'],
							$action
							);
			$number++;
		}
		
		/**	ROW COUNT */
		$iTotal = $this->jmlRows($param);
	   		
		if ( $sWhere != "" )
		{
			$selrows->from(array('a' => $this->table))
			   		->columns(array('ID_PLP'));
			
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
			   ->columns(array('ID_PLP'));
		
		$select->where(array('"a"."IDPERUSAHAAN" = '.$param['IDPERUSAHAAN'].' AND
							  "a"."ID_SERVICE_TYPE" = 121 '),
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
        $where->equalTo('ID_PLP', $data['ID_PLP']);
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
	
	public function getDataDetail($data)
	{
		$select 	= $this->sql->select();
		
		$select->from(new TableIdentifier('DET_PLP', SCHEMA_TPS));
		
		$where 		= new  Where();
		$where->equalTo('ID_PLP', $data['ID_PLP']);
		$select->where($where);
			
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		return $result->toArray();
		
	}
	
	public function save($data)
    {	
        $aColumns = array(	'IDPERUSAHAAN'		=> $data['IDPERUSAHAAN'],
						  	'ID_SERVICE_TYPE'	=> 121,
						  	'KD_KANTOR'			=> $data['KD_KANTOR'],
						  	'TIPE_DATA'			=> $data['TIPE_DATA'],
							'KD_TPS_ASAL'		=> $data['KD_TPS_ASAL'],
							'REF_NUMBER'		=> $data['REF_NUMBER'],
							'NO_SURAT'			=> $data['NO_SURAT'],
							'TGL_SURAT'			=> $data['TGL_SURAT'],
							'GUDANG_ASAL'		=> $data['GUDANG_ASAL'],
							'KD_TPS_TUJUAN'		=> $data['KD_TPS_TUJUAN'],
							'GUDANG_TUJUAN'		=> $data['GUDANG_TUJUAN'],
							'KD_ALASAN_PLP'		=> $data['KD_ALASAN_PLP'],
						  	'YOR_ASAL'			=> $data['YOR_ASAL'],
						  	'YOR_TUJUAN'		=> $data['YOR_TUJUAN'],
							'CALL_SIGN'			=> $data['CALL_SIGN'],
							'NM_ANGKUT'			=> $data['NM_ANGKUT'],
							'NO_VOY_FLIGHT'		=> $data['NO_VOY_FLIGHT'],
							'TGL_TIBA'			=> $data['TGL_TIBA'],
							'NO_BC11'			=> $data['NO_BC11'],
							'TGL_BC11'			=> $data['TGL_BC11'],
							'NM_PEMOHON'		=> $data['NM_PEMOHON'],
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
		$aColumns = array(	'ID_SERVICE_TYPE'	=> 121,
						  	'KD_KANTOR'			=> $data['KD_KANTOR'],
						  	'TIPE_DATA'			=> $data['TIPE_DATA'],
							'KD_TPS_ASAL'		=> $data['KD_TPS_ASAL'],
							'REF_NUMBER'		=> $data['REF_NUMBER'],
							'NO_SURAT'			=> $data['NO_SURAT'],
							'TGL_SURAT'			=> $data['TGL_SURAT'],
							'GUDANG_ASAL'		=> $data['GUDANG_ASAL'],
							'KD_TPS_TUJUAN'		=> $data['KD_TPS_TUJUAN'],
							'GUDANG_TUJUAN'		=> $data['GUDANG_TUJUAN'],
							'KD_ALASAN_PLP'		=> $data['KD_ALASAN_PLP'],
						  	'YOR_ASAL'			=> $data['YOR_ASAL'],
						  	'YOR_TUJUAN'		=> $data['YOR_TUJUAN'],
							'CALL_SIGN'			=> $data['CALL_SIGN'],
							'NM_ANGKUT'			=> $data['NM_ANGKUT'],
							'NO_VOY_FLIGHT'		=> $data['NO_VOY_FLIGHT'],
							'TGL_TIBA'			=> $data['TGL_TIBA'],
							'NO_BC11'			=> $data['NO_BC11'],
							'TGL_BC11'			=> $data['TGL_BC11'],
							'NM_PEMOHON'		=> $data['NM_PEMOHON'],
						  	'MDBY' 				=> $data['MDBY'],
						  	'MDDATE'			=> date("Y-m-d H:i:s"));
		
		$this->connection->beginTransaction();
		
		try {
			
			$sQuery		= $this->sql->update($this->table)
									->set($aColumns)
									->where(array('ID_PLP' => $data['ID_PLP']));
								
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
			$where->equalTo('ID_PLP', $id);
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
			   ->columns(array('ID_PLP'));
		
		$where 		= new  Where();
        $where->equalTo('ID_PLP', $data['ID_PLP']);
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
