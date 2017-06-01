<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     DokumenModule
 */

namespace Dokumen\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Select,
	Zend\Db\Sql\Sql,
	Zend\Db\Sql\Where,
	Zend\Db\Sql\Delete,
	Zend\Db\Sql\TableIdentifier;

class DokumenTable extends AbstractTableGateway
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
	
		$aColumns 	= array('a.ID_DET_COARRICODECO', 
							'a.ID_DET_COARRICODECO',
							'a.REF_NUMBER',
							
							'c.NM_DOK',
							'b.KD_TPS',
							'b.NM_ANGKUT',
							'b.NO_VOY_FLIGHT',
							'b.CALL_SIGN',
							'b.TGL_TIBA',
							'b.KD_GUDANG',
						
							'a.NO_CONT',
							'a.UK_CONT',
							'a.NO_SEGEL',
							'a.JNS_CONT',
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
							
							'a.CONT_ASAL',
							'a.SERI_KEMAS',
							'a.KD_KEMAS',
							'a.JML_KEMAS',
							
							'a.KD_TIMBUN',
							'd.NM_DOK_INOUT',
							'a.NO_DOK_INOUT',
							'a.TGL_DOK_INOUT',
							'a.WK_INOUT',
							'e.NM_SAR_ANGKUT',
							'a.NO_POL',
							'f.NM_FL_CONT',
							'a.ISO_CODE',
							'a.PEL_MUAT',
							'a.PEL_TRANSIT',
							'a.PEL_BONGKAR',
							'a.GUDANG_TUJUAN',
							'a.KD_KANTOR_PABEAN',
							'a.NO_DAFTAR_PABEAN',
							'a.TGL_DAFTAR_PABEAN',

							'a.NO_SEGEL_BC',
							'a.TGL_SEGEL_BC',

							'a.NO_DOK_IJIN_TPS',
							'a.TGL_DOK_IJIN_TPS',
						    'a.ID_DET_COARRICODECO');
		
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
		$select->where(array('"b"."MDBY" = '."'".$param['MDBY']."'". '
							 AND "b"."HISTORY" = '."'".$param['HISTORY']."'". ' '), \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);

		$selrows->where(array('"b"."CRBY" = '."'".$param['CRBY']."'". '
							  AND "b"."HISTORY" = '."'".$param['HISTORY']."'". ' '), \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		
		$select->from(array('a' => new TableIdentifier('DET_COARRICODECO', SCHEMA_TPS)))
			   ->columns(array( 'ID_DET_COARRICODECO',
								'NO_CONT',
								'UK_CONT',
								'NO_SEGEL',
								'JNS_CONT',
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
							   
							    'CONT_ASAL',
								'SERI_KEMAS',
								'KD_KEMAS',
								'JML_KEMAS',
							   
								'KD_TIMBUN',
								'NO_DOK_INOUT',
								'TGL_DOK_INOUT',
								'WK_INOUT',
								'NO_POL',
								'ISO_CODE',
								'PEL_MUAT',
								'PEL_TRANSIT',
								'PEL_BONGKAR',
								'GUDANG_TUJUAN',
							   
							    'KD_KANTOR_PABEAN',
								'NO_DAFTAR_PABEAN',
								'TGL_DAFTAR_PABEAN',

								'NO_SEGEL_BC',
								'TGL_SEGEL_BC',

								'NO_DOK_IJIN_TPS',
								'TGL_DOK_IJIN_TPS'))
			   
			   ->join(array('b' => new TableIdentifier('COARRICODECO', SCHEMA_TPS)), 'b.REF_NUMBER = a.REF_NUMBER',
					  array('REF_NUMBER', 
							'KD_DOK',
						    'KD_TPS', 
						    'NM_ANGKUT',
						    'NO_VOY_FLIGHT',
						    'CALL_SIGN', 
						    'TGL_TIBA', 
						    'KD_GUDANG'), $select::JOIN_LEFT)
			
			   ->join(array('c' => new TableIdentifier('DOKUMEN', SCHEMA_TPS)), 'c.KD_DOK = b.KD_DOK',
					  array('NM_DOK'), $select::JOIN_LEFT)
			
			   ->join(array('d' => new TableIdentifier('DOKUMEN_INOUT', SCHEMA_TPS)), 'd.KD_DOK_INOUT = a.KD_DOK_INOUT',
					  array('NM_DOK_INOUT'), $select::JOIN_LEFT)
			
			   ->join(array('e' => new TableIdentifier('SAR_ANGKUT', SCHEMA_TPS)), 'e.KD_SAR_ANGKUT = a.KD_SAR_ANGKUT_INOUT',
					  array('NM_SAR_ANGKUT'), $select::JOIN_LEFT)
			
			   ->join(array('f' => new TableIdentifier('FL_CONT', SCHEMA_TPS)), 'f.ID_FL_CONT = a.FL_CONT_KOSONG',
					  array('NM_FL_CONT'), $select::JOIN_LEFT);

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
	   		
			$row[]	= array(($number + $_GET['iDisplayStart']),
							$entry['ID_DET_COARRICODECO'],
							$entry['REF_NUMBER'],
							
							$entry['NM_DOK'],
							$entry['KD_TPS'],
							$entry['NM_ANGKUT'],
							$entry['NO_VOY_FLIGHT'],
							$entry['CALL_SIGN'],
							$entry['TGL_TIBA'],
							$entry['KD_GUDANG'],
							
							$entry['NO_CONT'],
							$entry['UK_CONT'],
							$entry['NO_SEGEL'],
							$entry['JNS_CONT'],
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
							
							$entry['CONT_ASAL'],
							$entry['SERI_KEMAS'],
							$entry['KD_KEMAS'],
							$entry['JML_KEMAS'],
							
							$entry['KD_TIMBUN'],
							$entry['NM_DOK_INOUT'],
							$entry['NO_DOK_INOUT'],
							$entry['TGL_DOK_INOUT'],
							$entry['WK_INOUT'],
							$entry['NM_SAR_ANGKUT'],
							$entry['NO_POL'],
							$entry['NM_FL_CONT'],
							$entry['ISO_CODE'],
							$entry['PEL_MUAT'],
							$entry['PEL_TRANSIT'],
							$entry['PEL_BONGKAR'],
							$entry['GUDANG_TUJUAN'],

							$entry['KD_KANTOR_PABEAN'],
							$entry['NO_DAFTAR_PABEAN'],
							$entry['TGL_DAFTAR_PABEAN'],
							
							$entry['NO_SEGEL_BC'],
							$entry['TGL_SEGEL_BC'],
							
							$entry['NO_DOK_IJIN_TPS'],
							$entry['TGL_DOK_IJIN_TPS']
							);
			$number++;
		}
		
		/**	ROW COUNT */
		$iTotal = $this->jmlRows($param);
				   		
		if ( $sWhere != "" )
		{
			$selrows->from(array('a' => new TableIdentifier('DET_COARRICODECO', SCHEMA_TPS)))
			   		->columns(array('ID_DET_COARRICODECO'))
					
					->join(array('b' => new TableIdentifier('COARRICODECO', SCHEMA_TPS)), 'b.REF_NUMBER = a.REF_NUMBER',
					  	   array('REF_NUMBER'), $select::JOIN_LEFT)
				
				    ->join(array('c' => new TableIdentifier('DOKUMEN', SCHEMA_TPS)), 'c.KD_DOK = b.KD_DOK',
						   array('ID_DOK'), $select::JOIN_LEFT)
				
				    ->join(array('d' => new TableIdentifier('DOKUMEN_INOUT', SCHEMA_TPS)), 'd.KD_DOK_INOUT = a.KD_DOK_INOUT',
						   array('ID_DOK_INOUT'), $select::JOIN_LEFT)
				
				    ->join(array('e' => new TableIdentifier('SAR_ANGKUT', SCHEMA_TPS)), 'e.KD_SAR_ANGKUT = a.KD_SAR_ANGKUT_INOUT',
						   array('ID_SAR_ANGKUT'), $select::JOIN_LEFT)
				
					->join(array('f' => new TableIdentifier('FL_CONT', SCHEMA_TPS)), 'f.ID_FL_CONT = a.FL_CONT_KOSONG',
					  array('ID_FL_CONT'), $select::JOIN_LEFT);
			
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
		
		$select->from(array('a' => new TableIdentifier('DET_COARRICODECO', SCHEMA_TPS)))
			   ->columns(array('ID_DET_COARRICODECO'))
			
			   ->join(array('b' => new TableIdentifier('COARRICODECO', SCHEMA_TPS)), 'b.REF_NUMBER = a.REF_NUMBER',
					  array('REF_NUMBER'), $select::JOIN_LEFT)
			
			   ->join(array('c' => new TableIdentifier('DOKUMEN', SCHEMA_TPS)), 'c.KD_DOK = b.KD_DOK',
					  array('ID_DOK'), $select::JOIN_LEFT)
			
			   ->join(array('d' => new TableIdentifier('DOKUMEN_INOUT', SCHEMA_TPS)), 'd.KD_DOK_INOUT = a.KD_DOK_INOUT',
					  array('ID_DOK_INOUT'), $select::JOIN_LEFT)
			
			   ->join(array('e' => new TableIdentifier('SAR_ANGKUT', SCHEMA_TPS)), 'e.KD_SAR_ANGKUT = a.KD_SAR_ANGKUT_INOUT',
					  array('ID_SAR_ANGKUT'), $select::JOIN_LEFT)
			
			   ->join(array('f' => new TableIdentifier('FL_CONT', SCHEMA_TPS)), 'f.ID_FL_CONT = a.FL_CONT_KOSONG',
					  array('ID_FL_CONT'), $select::JOIN_LEFT);
		
		$where 		= new  Where();
		
		$where->equalTo('b.MDBY', $param['MDBY']);
		$where->equalTo('b.HISTORY', $param['HISTORY']);
		
        $select->where($where);
		
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
			   ->columns(array('REF_NUMBER', 
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
        $where->equalTo('REF_NUMBER', $data['REF_NUMBER']);
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
						  'KD_DOK'			=> $data['KD_DOK'],
						  'KD_TPS' 			=> $data['KD_TPS'],
						  'NM_ANGKUT' 		=> $data['NM_ANGKUT'],
						  'NO_VOY_FLIGHT'	=> $data['NO_VOY_FLIGHT'],
						  'CALL_SIGN' 		=> $data['CALL_SIGN'],
						  'TGL_TIBA' 		=> $data['TGL_TIBA'],
						  'KD_GUDANG' 		=> $data['KD_GUDANG'],
						  'IS_REGISTER'		=> 1,
						  'CRBY' 			=> $data['CRBY'],
						  'CRDATE'			=> date("Y-m-d H:i:s"),
						  'MDBY' 			=> $data['MDBY'],
						  'MDDATE'			=> date("Y-m-d H:i:s"),
						  'HISTORY' 		=> strtotime(date("Y-m-d H:i")));

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
						  'IS_REGISTER'		=> 1,
						  'MDBY' 			=> $data['MDBY'],
						  'MDDATE'			=> date("Y-m-d H:i:s"),
						  'HISTORY' 		=> strtotime(date("Y-m-d H:i")));
		
		$this->connection->beginTransaction();
		
		try {
			
			$sQuery		= $this->sql->update($this->table)
									->set($aColumns)
									->where(array('REF_NUMBER' => $data['REF_NUMBER']));
								
			$this->sql->prepareStatementForSqlObject($sQuery)->execute();
			//echo $sQuery->getSqlString($this->adapter->getPlatform()); exit();
			
			$this->connection->commit();
			
		} catch (Exception $e) {
			$this->connection->rollback();
		}
	}
	
	public function resetHistory($data)
	{
		$aColumns = array('HISTORY' 		=> '');
		
		$this->connection->beginTransaction();
		
		try {
			
			$sQuery		= $this->sql->update($this->table)
									->set($aColumns)
									->where(array('MDBY' 	=> $data['MDBY'], 
												  'HISTORY' => $data['HISTORY']));
								
			$this->sql->prepareStatementForSqlObject($sQuery)->execute();
			//echo $sQuery->getSqlString($this->adapter->getPlatform()); exit();
			
			$this->connection->commit();
			
		} catch (Exception $e) {
			$this->connection->rollback();
		}
	}
	
	public function saveDet($data)
    {
        $aColumns = array(	'NO_CONT'				=> $data['NO_CONT'],
							'UK_CONT'				=> $data['UK_CONT'],
							'NO_SEGEL'				=> $data['NO_SEGEL'],
							'JNS_CONT'				=> $data['JNS_CONT'],
							'NO_BL_AWB'				=> $data['NO_BL_AWB'],
							'TGL_BL_AWB'			=> $data['TGL_BL_AWB'],
							'NO_MASTER_BL_AWB'		=> $data['NO_MASTER_BL_AWB'],
							'TGL_MASTER_BL_AWB'		=> $data['TGL_MASTER_BL_AWB'],
							'ID_CONSIGNEE'			=> $data['ID_CONSIGNEE'],
							'CONSIGNEE'				=> $data['CONSIGNEE'],
							'BRUTO'					=> $data['BRUTO'],
							'NO_BC11'				=> $data['NO_BC11'],
							'TGL_BC11'				=> $data['TGL_BC11'],
							'NO_POS_BC11'			=> $data['NO_POS_BC11'],
							'CONT_ASAL'				=> $data['CONT_ASAL'],
							'SERI_KEMAS'			=> $data['SERI_KEMAS'],
							'KD_KEMAS'				=> $data['KD_KEMAS'],
							'JML_KEMAS'				=> $data['JML_KEMAS'],
							'KD_TIMBUN'				=> $data['KD_TIMBUN'],
							'KD_DOK_INOUT'			=> $data['KD_DOK_INOUT'],
							'NO_DOK_INOUT'			=> $data['NO_DOK_INOUT'],
							'TGL_DOK_INOUT'			=> $data['TGL_DOK_INOUT'],
							'WK_INOUT'				=> $data['WK_INOUT'],
							'KD_SAR_ANGKUT_INOUT'	=> $data['KD_SAR_ANGKUT_INOUT'],
							'NO_POL'				=> $data['NO_POL'],
							'FL_CONT_KOSONG'		=> $data['FL_CONT_KOSONG'],
							'ISO_CODE'				=> $data['ISO_CODE'],
							'PEL_MUAT'				=> $data['PEL_MUAT'],
							'PEL_TRANSIT'			=> $data['PEL_TRANSIT'],
							'PEL_BONGKAR'			=> $data['PEL_BONGKAR'],
							'GUDANG_TUJUAN'			=> $data['GUDANG_TUJUAN'],
							'KD_KANTOR_PABEAN'		=> $data['KD_KANTOR_PABEAN'],
							'NO_DAFTAR_PABEAN'		=> $data['NO_DAFTAR_PABEAN'],
							'TGL_DAFTAR_PABEAN'		=> $data['TGL_DAFTAR_PABEAN'],
							'NO_SEGEL_BC'			=> $data['NO_SEGEL_BC'],
							'TGL_SEGEL_BC'			=> $data['TGL_SEGEL_BC'],
							'NO_DOK_IJIN_TPS'		=> $data['NO_DOK_IJIN_TPS'],
							'TGL_DOK_IJIN_TPS'		=> $data['TGL_DOK_IJIN_TPS'],
						  	'CRBY' 					=> $data['CRBY'],
						  	'CRDATE'				=> date("Y-m-d H:i:s"),
						  	'MDBY' 					=> $data['MDBY'],
						  	'MDDATE'				=> date("Y-m-d H:i:s"));

		$this->connection->beginTransaction();
	
		try {
			
			$sQuery	= $this->sql->insert(new TableIdentifier('DET_COARRICODECO', SCHEMA_TPS))->values($aColumns);								
			$this->sql->prepareStatementForSqlObject($sQuery)->execute();
			//echo $sQuery->getSqlString($this->adapter->getPlatform()); exit();
			
			$this->connection->commit();
			
		} catch (Exception $e) {
			$this->connection->rollback();
		}
		
    }
	
	public function editDet($data)
	{
		$aColumns = array(	'UK_CONT'				=> $data['UK_CONT'],
							'JNS_CONT'				=> $data['JNS_CONT'],
							'NO_BL_AWB'				=> $data['NO_BL_AWB'],
							'TGL_BL_AWB'			=> $data['TGL_BL_AWB'],
							'NO_MASTER_BL_AWB'		=> $data['NO_MASTER_BL_AWB'],
							'TGL_MASTER_BL_AWB'		=> $data['TGL_MASTER_BL_AWB'],
							'ID_CONSIGNEE'			=> $data['ID_CONSIGNEE'],
							'CONSIGNEE'				=> $data['CONSIGNEE'],
							'BRUTO'					=> $data['BRUTO'],
							'NO_BC11'				=> $data['NO_BC11'],
							'TGL_BC11'				=> $data['TGL_BC11'],
							'NO_POS_BC11'			=> $data['NO_POS_BC11'],
							'CONT_ASAL'				=> $data['CONT_ASAL'],
							'SERI_KEMAS'			=> $data['SERI_KEMAS'],
							'KD_KEMAS'				=> $data['KD_KEMAS'],
							'JML_KEMAS'				=> $data['JML_KEMAS'],
							'KD_TIMBUN'				=> $data['KD_TIMBUN'],
							'KD_DOK_INOUT'			=> $data['KD_DOK_INOUT'],
							'NO_DOK_INOUT'			=> $data['NO_DOK_INOUT'],
							'TGL_DOK_INOUT'			=> $data['TGL_DOK_INOUT'],
							'WK_INOUT'				=> $data['WK_INOUT'],
							'KD_SAR_ANGKUT_INOUT'	=> $data['KD_SAR_ANGKUT_INOUT'],
							'NO_POL'				=> $data['NO_POL'],
							'FL_CONT_KOSONG'		=> $data['FL_CONT_KOSONG'],
							'ISO_CODE'				=> $data['ISO_CODE'],
							'PEL_MUAT'				=> $data['PEL_MUAT'],
							'PEL_TRANSIT'			=> $data['PEL_TRANSIT'],
							'PEL_BONGKAR'			=> $data['PEL_BONGKAR'],
							'GUDANG_TUJUAN'			=> $data['GUDANG_TUJUAN'],
							'KD_KANTOR_PABEAN'		=> $data['KD_KANTOR_PABEAN'],
							'NO_DAFTAR_PABEAN'		=> $data['NO_DAFTAR_PABEAN'],
							'TGL_DAFTAR_PABEAN'		=> $data['TGL_DAFTAR_PABEAN'],
							'NO_SEGEL_BC'			=> $data['NO_SEGEL_BC'],
							'TGL_SEGEL_BC'			=> $data['TGL_SEGEL_BC'],
							'NO_DOK_IJIN_TPS'		=> $data['NO_DOK_IJIN_TPS'],
							'TGL_DOK_IJIN_TPS'		=> $data['TGL_DOK_IJIN_TPS'],
						  	'MDBY' 					=> $data['MDBY'],
						  	'MDDATE'				=> date("Y-m-d H:i:s"));
		
		$this->connection->beginTransaction();
		
		try {
			
			$sQuery		= $this->sql->update(new TableIdentifier('DET_COARRICODECO', SCHEMA_TPS))
									->set($aColumns)
									->where(array('NO_CONT' => $data['NO_CONT'], 'NO_SEGEL' => $data['NO_SEGEL']));
								
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
			$where->equalTo('REF_NUMBER', $id);
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
			   ->columns(array('REF_NUMBER'));
		
		$where 		= new  Where();
        $where->equalTo('REF_NUMBER', $data['REF_NUMBER']);
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
	
	public function checkDetID($data)
	{	
        $select 	= $this->sql->select();
		
		$select->from(new TableIdentifier('DET_COARRICODECO', SCHEMA_TPS))
			   ->columns(array('ID_DET_COARRICODECO'));
		
		$where 		= new  Where();
        $where->equalTo('NO_CONT', $data['NO_CONT']);
		$where->equalTo('NO_SEGEL', $data['NO_SEGEL']);
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
