<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     PengirimanModule
 */

namespace Pengiriman\Tangki\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Select,
	Zend\Db\Sql\Sql,
	Zend\Db\Sql\Where,
	Zend\Db\Sql\Delete,
	Zend\Db\Sql\TableIdentifier;

class TangkidetailTable extends AbstractTableGateway
{
    protected $table;
	protected $adapter;
	public $connection;

    public function __construct(Adapter $adapter)
    {
        $this->adapter 		= $adapter;
        
		$this->sql 			= new Sql($this->adapter);
		$this->connection 	= $this->adapter->getDriver()->getConnection();
		$this->table 		= new TableIdentifier('DET_COARRICODECO', SCHEMA_TPS);
		$this->initialize();
    }
	
	public function fetchAll($param)
    {
		$select 	= $this->sql->select();
		$selrows 	= $this->sql->select();
	
		$aColumns 	= array('a.ID_DET_COARRICODECO', 
							'a.ID_DET_COARRICODECO',
							'b.REF_NUMBER',
							'c.NM_DOK',
							'a.NO_BL_AWB',
							'a.TGL_BL_AWB',
							'a.ID_CONSIGNEE',
							'a.CONSIGNEE',
							'a.NO_BC11',
							'a.TGL_BC11',
							'a.NO_POS_BC11',
							'd.NM_DOK_INOUT',
							'a.NO_DOK_INOUT',
							'a.TGL_DOK_INOUT',
							'a.WK_INOUT',
							'e.NM_SAR_ANGKUT',
							'a.NO_POL',
							'a.PEL_MUAT',
							'a.PEL_TRANSIT',
							'a.PEL_BONGKAR',
							'a.SERI_OUT',
							'a.NO_TANGKI',
							'a.JML_SATUAN',
							'a.JNS_SATUAN',
						    'a.ID_COARRICODECO');
		
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
		$select->where(array('"a"."ID_COARRICODECO" = '.$param['ID_COARRICODECO']. '
							 AND "a"."FLAGS" = 0'), \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);

		$selrows->where(array('"a"."ID_COARRICODECO" = '.$param['ID_COARRICODECO']. '
							  AND "a"."FLAGS" = 0'), \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		
							
		
		$select->from(array('a' => $this->table))
			   ->columns(array( 'ID_DET_COARRICODECO',
							    'ID_COARRICODECO',
								'NO_BL_AWB',
								'TGL_BL_AWB',
								'ID_CONSIGNEE',
								'CONSIGNEE',
								'NO_BC11',
								'TGL_BC11',
								'NO_POS_BC11',
								'NO_DOK_INOUT',
								'TGL_DOK_INOUT',
								'WK_INOUT',
								'NO_POL',
								'PEL_MUAT',
								'PEL_TRANSIT',
								'PEL_BONGKAR',
								'SERI_OUT',
								'NO_TANGKI',
								'JML_SATUAN',
								'JNS_SATUAN'))
			   
			   ->join(array('b' => new TableIdentifier('COARRICODECO', SCHEMA_TPS)), 'b.ID_COARRICODECO = a.ID_COARRICODECO',
					  array('REF_NUMBER'), $select::JOIN_LEFT)
			
			   ->join(array('c' => new TableIdentifier('DOKUMEN', SCHEMA_TPS)), 'c.KD_DOK = b.KD_DOK',
					  array('NM_DOK'), $select::JOIN_LEFT)
			
			   ->join(array('d' => new TableIdentifier('DOKUMEN_INOUT', SCHEMA_TPS)), 'd.KD_DOK_INOUT = a.KD_DOK_INOUT',
					  array('NM_DOK_INOUT'), $select::JOIN_LEFT)
			
			   ->join(array('e' => new TableIdentifier('SAR_ANGKUT', SCHEMA_TPS)), 'e.KD_SAR_ANGKUT = a.KD_SAR_ANGKUT_INOUT',
					  array('NM_SAR_ANGKUT'), $select::JOIN_LEFT);

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
							$entry['NO_BL_AWB'],
							$entry['TGL_BL_AWB'],
							$entry['ID_CONSIGNEE'],
							$entry['CONSIGNEE'],
							$entry['NO_BC11'],
							$entry['TGL_BC11'],
							$entry['NO_POS_BC11'],
							$entry['NM_DOK_INOUT'],
							$entry['NO_DOK_INOUT'],
							$entry['TGL_DOK_INOUT'],
							$entry['WK_INOUT'],
							$entry['e.NM_SAR_ANGKUT'],
							$entry['NO_POL'],
							$entry['PEL_MUAT'],
							$entry['PEL_TRANSIT'],
							$entry['PEL_BONGKAR'],
							$entry['SERI_OUT'],
							$entry['NO_TANGKI'],
							$entry['JML_SATUAN'],
							$entry['JNS_SATUAN']
							);
			$number++;
		}
		
		/**	ROW COUNT */
		$iTotal = $this->jmlRows($param);
				   		
		if ( $sWhere != "" )
		{
			$selrows->from(array('a' => $this->table))
			   		->columns(array('ID_DET_COARRICODECO'))
					
					->join(array('b' => new TableIdentifier('COARRICODECO', SCHEMA_TPS)), 'b.ID_COARRICODECO = a.ID_COARRICODECO',
					  	   array('ID_COARRICODECO'), $select::JOIN_LEFT)
				
				    ->join(array('c' => new TableIdentifier('DOKUMEN', SCHEMA_TPS)), 'c.KD_DOK = b.KD_DOK',
						   array('ID_DOK'), $select::JOIN_LEFT)
				
				    ->join(array('d' => new TableIdentifier('DOKUMEN_INOUT', SCHEMA_TPS)), 'd.KD_DOK_INOUT = a.KD_DOK_INOUT',
						   array('ID_DOK_INOUT'), $select::JOIN_LEFT)
				
				    ->join(array('e' => new TableIdentifier('SAR_ANGKUT', SCHEMA_TPS)), 'e.KD_SAR_ANGKUT = a.KD_SAR_ANGKUT_INOUT',
						   array('ID_SAR_ANGKUT'), $select::JOIN_LEFT);
			
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
			   ->columns(array('ID_DET_COARRICODECO'))
			
			   ->join(array('b' => new TableIdentifier('COARRICODECO', SCHEMA_TPS)), 'b.ID_COARRICODECO = a.ID_COARRICODECO',
					  array('ID_COARRICODECO'), $select::JOIN_LEFT)
			
			   ->join(array('c' => new TableIdentifier('DOKUMEN', SCHEMA_TPS)), 'c.KD_DOK = b.KD_DOK',
					  array('ID_DOK'), $select::JOIN_LEFT)
			
			   ->join(array('d' => new TableIdentifier('DOKUMEN_INOUT', SCHEMA_TPS)), 'd.KD_DOK_INOUT = a.KD_DOK_INOUT',
					  array('ID_DOK_INOUT'), $select::JOIN_LEFT)
			
			   ->join(array('e' => new TableIdentifier('SAR_ANGKUT', SCHEMA_TPS)), 'e.KD_SAR_ANGKUT = a.KD_SAR_ANGKUT_INOUT',
					  array('ID_SAR_ANGKUT'), $select::JOIN_LEFT);
		
		$where 		= new  Where();
		
		$where->equalTo('a.ID_COARRICODECO', $param['ID_COARRICODECO']);
		$where->equalTo('a.FLAGS', 0);
		
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
		
		$select->from(array('a' => $this->table))
			   ->join(array('b' => new TableIdentifier('COARRICODECO', SCHEMA_TPS)), 'b.ID_COARRICODECO = a.ID_COARRICODECO',
					  array('REF_NUMBER'), $select::JOIN_LEFT);
		
		$where 		= new  Where();
        $where->equalTo('ID_DET_COARRICODECO', $data['ID_DET_COARRICODECO']);
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
        $aColumns = array(	'ID_COARRICODECO'		=> $data['ID_COARRICODECO'],
							'NO_BL_AWB'				=> $data['NO_BL_AWB'],
							'TGL_BL_AWB'			=> $data['TGL_BL_AWB'],
							'ID_CONSIGNEE'			=> $data['ID_CONSIGNEE'],
							'CONSIGNEE'				=> $data['CONSIGNEE'],
							'NO_BC11'				=> $data['NO_BC11'],
							'TGL_BC11'				=> $data['TGL_BC11'],
							'NO_POS_BC11'			=> $data['NO_POS_BC11'],
							'KD_DOK_INOUT'			=> $data['KD_DOK_INOUT'],
							'NO_DOK_INOUT'			=> $data['NO_DOK_INOUT'],
							'TGL_DOK_INOUT'			=> $data['TGL_DOK_INOUT'],
							'WK_INOUT'				=> $data['WK_INOUT'],
							'KD_SAR_ANGKUT_INOUT'	=> $data['KD_SAR_ANGKUT_INOUT'],
							'NO_POL'				=> $data['NO_POL'],
							'PEL_MUAT'				=> $data['PEL_MUAT'],
							'PEL_TRANSIT'			=> $data['PEL_TRANSIT'],
							'PEL_BONGKAR'			=> $data['PEL_BONGKAR'],
							'SERI_OUT'				=> $data['SERI_OUT'],
							'NO_TANGKI'				=> $data['NO_TANGKI'],
							'JML_SATUAN'			=> $data['JML_SATUAN'],
							'JNS_SATUAN'			=> $data['JNS_SATUAN'],
						  	'CRBY' 					=> $data['CRBY'],
						  	'CRDATE'				=> date("Y-m-d H:i:s"),
						  	'MDBY' 					=> $data['MDBY'],
						  	'MDDATE'				=> date("Y-m-d H:i:s"));

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
		$aColumns = array(	'NO_BL_AWB'				=> $data['NO_BL_AWB'],
							'TGL_BL_AWB'			=> $data['TGL_BL_AWB'],
							'ID_CONSIGNEE'			=> $data['ID_CONSIGNEE'],
							'CONSIGNEE'				=> $data['CONSIGNEE'],
							'NO_BC11'				=> $data['NO_BC11'],
							'TGL_BC11'				=> $data['TGL_BC11'],
							'NO_POS_BC11'			=> $data['NO_POS_BC11'],
							'KD_DOK_INOUT'			=> $data['KD_DOK_INOUT'],
							'NO_DOK_INOUT'			=> $data['NO_DOK_INOUT'],
							'TGL_DOK_INOUT'			=> $data['TGL_DOK_INOUT'],
							'WK_INOUT'				=> $data['WK_INOUT'],
							'KD_SAR_ANGKUT_INOUT'	=> $data['KD_SAR_ANGKUT_INOUT'],
							'NO_POL'				=> $data['NO_POL'],
							'PEL_MUAT'				=> $data['PEL_MUAT'],
							'PEL_TRANSIT'			=> $data['PEL_TRANSIT'],
							'PEL_BONGKAR'			=> $data['PEL_BONGKAR'],
							'SERI_OUT'				=> $data['SERI_OUT'],
							'NO_TANGKI'				=> $data['NO_TANGKI'],
							'JML_SATUAN'			=> $data['JML_SATUAN'],
							'JNS_SATUAN'			=> $data['JNS_SATUAN'],
						  	'MDBY' 					=> $data['MDBY'],
						  	'MDDATE'				=> date("Y-m-d H:i:s"));
		
		$this->connection->beginTransaction();
		
		try {
			
			$sQuery		= $this->sql->update($this->table)
									->set($aColumns)
									->where(array('ID_DET_COARRICODECO' => $data['ID_DET_COARRICODECO']));
								
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
			$where->equalTo('ID_DET_COARRICODECO', $id);
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
			   ->columns(array('ID_DET_COARRICODECO'));
		
		$where 		= new  Where();
        $where->equalTo('ID_DET_COARRICODECO', $data['ID_DET_COARRICODECO']);
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
