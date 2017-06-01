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

class Sppbbc23Table extends AbstractTableGateway
{
    protected $table;
	protected $adapter;
	public $connection;

    public function __construct(Adapter $adapter)
    {
        $this->adapter 		= $adapter;
        
		$this->sql 			= new Sql($this->adapter);
		$this->connection 	= $this->adapter->getDriver()->getConnection();
		$this->table 		= new TableIdentifier('SPPBBC23', SCHEMA_TPS);
		$this->initialize();
    }
	
	public function fetchAll($param)
    {
		$select 	= $this->sql->select();
		$selrows 	= $this->sql->select();
		
		$aColumns 	= array('a.ID_SPPBBC23',
							'a.ID_SPPBBC23', 
							'a.CAR', 
							'a.NO_SPPB', 
							'a.TGL_SPPB', 
							'a.KD_KANTOR_PENGAWAS', 
							'a.KD_KANTOR_BONGKAR', 
							'a.NO_PIB', 
							'a.TGL_PIB', 
							'a.NPWP_IMP', 
							'a.NAMA_IMP', 
							'a.ALAMAT_IMP', 
							'a.NPWP_PPJK', 
							'a.NAMA_PPJK',
							'a.ALAMAT_PPJK', 
							'a.NM_ANGKUT', 
							'a.NO_VOY_FLIGHT', 
							'a.BRUTO', 
							'a.NETTO', 
							'a.GUDANG', 
							'a.STATUS_JALUR', 
							'a.JML_CONT', 
							'a.NO_BC11', 
							'a.TGL_BC11', 
							'a.NO_POS_BC11', 
							'a.NO_BL_AWB', 
							'a.TGL_BL_AWB', 
							'a.NO_MASTER_BL_AWB',
							'a.TGL_MASTER_BL_AWB',
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
		
		if($param['NO_SPPB'] != ''):
			$select->where(array('"a"."NO_SPPB" = '."'".$param['NO_SPPB']."'".' '),
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
			$selrows->where(array('"a"."NO_SPPB" = '."'".$param['NO_SPPB']."'".' '),
							\Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
		
		if($param['TGL_SPPB'] != ''):
			$select->where(array('"a"."TGL_SPPB" = '."'".$param['TGL_SPPB']."'".' '), 
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
			$selrows->where(array('"a"."TGL_SPPB" = '."'".$param['TGL_SPPB']."'".' '), 
							\Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
		
		if($param['NPWP_IMP'] != ''):
			$select->where(array('"a"."NPWP_IMP" = '."'".$param['NPWP_IMP']."'".' '),
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
			$selrows->where(array('"a"."NPWP_IMP" = '."'".$param['NPWP_IMP']."'".' '),
							\Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
			
		
		$select->from(array('a' => $this->table))
			   ->columns(array( 'ID_SPPBBC23', 
								'CAR', 
								'NO_SPPB', 
								'TGL_SPPB', 
								'KD_KANTOR_PENGAWAS', 
								'KD_KANTOR_BONGKAR', 
								'NO_PIB', 
								'TGL_PIB', 
								'NPWP_IMP', 
								'NAMA_IMP', 
								'ALAMAT_IMP', 
								'NPWP_PPJK', 
								'NAMA_PPJK',
								'ALAMAT_PPJK', 
								'NM_ANGKUT', 
								'NO_VOY_FLIGHT', 
								'BRUTO', 
								'NETTO', 
								'GUDANG', 
								'STATUS_JALUR', 
								'JML_CONT', 
								'NO_BC11', 
								'TGL_BC11', 
								'NO_POS_BC11', 
								'NO_BL_AWB', 
								'TGL_BL_AWB', 
								'NO_MASTER_BL_AWB',
								'TGL_MASTER_B',
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
			$action	= '	<a data-href="'.BASEPATH.'/penerimaan/sppbbc23/detail/'.$entry['ID_SPPBBC23'].'" rel="tooltip" title="Detail" class="ajaxify">
							<button class="btn btn-primary btn-sm"><i class="fa fa-search"></i></button>
						</a>';
	   		
			$row[]	= array('<input type="checkbox" name="UID[]" id="UID" value="'.$entry['ID_SPPBBC23'].'" class="checkboxes">',
							$entry['ID_SPPBBC23'], 
							$entry['CAR'],
							$entry['NO_SPPB'],
							$entry['TGL_SPPB'],
							$entry['KD_KANTOR_PENGAWAS'],
							$entry['KD_KANTOR_BONGKAR'],
							$entry['NO_PIB'],
							$entry['TGL_PIB'],
							$entry['NPWP_IMP'],
							$entry['NAMA_IMP'],
							$entry['ALAMAT_IMP'],
							$entry['NPWP_PPJK'],
							$entry['NAMA_PPJK'],
							$entry['ALAMAT_PPJK'],
							$entry['NM_ANGKUT'],
							$entry['NO_VOY_FLIGHT'],
							$entry['BRUTO'],
							$entry['NETTO'],
							$entry['GUDANG'],
							$entry['STATUS_JALUR'],
							$entry['JML_CONT'],
							$entry['NO_BC11'],
							$entry['TGL_BC11'],
							$entry['NO_POS_BC11'],
							$entry['NO_BL_AWB'],
							$entry['TGL_BL_AWB'],
							$entry['NO_MASTER_BL_AWB'],
							$entry['TGL_MASTER_B'],
							$action
							);
			$number++;
		}
		
		/**	ROW COUNT */
		$iTotal = $this->jmlRows($param);
	   		
		if ( $sWhere != "" )
		{
			$selrows->from(array('a' => $this->table))
			   		->columns(array('ID_SPPBBC23'));
			
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
			   ->columns(array('ID_SPPBBC23'));
		
		$select->where(array('"a"."IDPERUSAHAAN" = '.$param['IDPERUSAHAAN'].' '),
					   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		
		if($param['NO_SPPB'] != ''):
			$select->where(array('"a"."NO_SPPB" = '."'".$param['NO_SPPB']."'".' '),
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
		
		if($param['TGL_SPPB'] != ''):
			$select->where(array('"a"."TGL_SPPB" = '."'".$param['TGL_SPPB']."'".' '), 
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
		
		if($param['NPWP_IMP'] != ''):
			$select->where(array('"a"."NPWP_IMP" = '."'".$param['NPWP_IMP']."'".' '),
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
		
		$select->from($this->table);
		
		$where 		= new  Where();
        $where->equalTo('ID_SPPBBC23', $data['ID_SPPBBC23']);
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
						  	'CAR'				=> $data['CAR'],
							'NO_SPPB' 			=> $data['NO_SPPB'],
							'TGL_SPPB' 			=> $data['TGL_SPPB'],
							'KD_KANTOR_PENGAWAS'=> $data['KD_KANTOR_PENGAWAS'],
						  	'KD_KANTOR_BONGKAR' => $data['KD_KANTOR_BONGKAR'],
							'NO_PIB' 			=> $data['NO_PIB'],
							'TGL_PIB' 			=> $data['TGL_PIB'],
							'NPWP_IMP' 			=> $data['NPWP_IMP'],
							'NAMA_IMP' 			=> $data['NAMA_IMP'],
							'ALAMAT_IMP' 		=> $data['ALAMAT_IMP'],
							'NPWP_PPJK' 		=> $data['NPWP_PPJK'],
							'NAMA_PPJK' 		=> $data['NAMA_PPJK'],
							'ALAMAT_PPJK' 		=> $data['ALAMAT_PPJK'],
							'NM_ANGKUT' 		=> $data['NM_ANGKUT'],
							'NO_VOY_FLIGHT' 	=> $data['NO_VOY_FLIGHT'],
							'BRUTO'				=> $data['BRUTO'],
							'NETTO' 			=> $data['NETTO'],
							'GUDANG' 			=> $data['GUDANG'],
							'STATUS_JALUR' 		=> $data['STATUS_JALUR'],
							'JML_CONT' 			=> $data['JML_CONT'],
							'NO_BC11' 			=> $data['NO_BC11'],
							'TGL_BC11' 			=> $data['TGL_BC11'],
							'NO_POS_BC11' 		=> $data['NO_POS_BC11'],
							'NO_BL_AWB' 		=> $data['NO_BL_AWB'],
							'TGL_BL_AWB' 		=> $data['TGL_BL_AWB'],
							'NO_MASTER_BL_AWB' 	=> $data['NO_MASTER_BL_AWB'],
							'TGL_MASTER_BL_AWB' => $data['TGL_MASTER_BL_AWB'],
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
						  	'CAR'				=> $data['CAR'],
							'NO_SPPB' 			=> $data['NO_SPPB'],
							'TGL_SPPB' 			=> $data['TGL_SPPB'],
							'KD_KANTOR_PENGAWAS'=> $data['KD_KANTOR_PENGAWAS'],
						  	'KD_KANTOR_BONGKAR' => $data['KD_KANTOR_BONGKAR'],
							'NO_PIB' 			=> $data['NO_PIB'],
							'TGL_PIB' 			=> $data['TGL_PIB'],
							'NPWP_IMP' 			=> $data['NPWP_IMP'],
							'NAMA_IMP' 			=> $data['NAMA_IMP'],
							'ALAMAT_IMP' 		=> $data['ALAMAT_IMP'],
							'NPWP_PPJK' 		=> $data['NPWP_PPJK'],
							'NAMA_PPJK' 		=> $data['NAMA_PPJK'],
							'ALAMAT_PPJK' 		=> $data['ALAMAT_PPJK'],
							'NM_ANGKUT' 		=> $data['NM_ANGKUT'],
							'NO_VOY_FLIGHT' 	=> $data['NO_VOY_FLIGHT'],
							'BRUTO'				=> $data['BRUTO'],
							'NETTO' 			=> $data['NETTO'],
							'GUDANG' 			=> $data['GUDANG'],
							'STATUS_JALUR' 		=> $data['STATUS_JALUR'],
							'JML_CONT' 			=> $data['JML_CONT'],
							'NO_BC11' 			=> $data['NO_BC11'],
							'TGL_BC11' 			=> $data['TGL_BC11'],
							'NO_POS_BC11' 		=> $data['NO_POS_BC11'],
							'NO_BL_AWB' 		=> $data['NO_BL_AWB'],
							'TGL_BL_AWB' 		=> $data['TGL_BL_AWB'],
							'NO_MASTER_BL_AWB' 	=> $data['NO_MASTER_BL_AWB'],
							'TGL_MASTER_BL_AWB' => $data['TGL_MASTER_BL_AWB'],
						  	'MDBY' 				=> $data['MDBY'],
						  	'MDDATE'			=> date("Y-m-d H:i:s"));
		
		$this->connection->beginTransaction();
		
		try {
			
			$sQuery		= $this->sql->update($this->table)
									->set($aColumns)
									->where(array('ID_SPPBBC23' => $data['ID_SPPBBC23']));
								
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
			$where->equalTo('ID_SPPBBC23', $id);
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
			   ->columns(array('ID_SPPBBC23'));
		
		$where 		= new  Where();
        $where->equalTo('ID_SPPBBC23', $data['ID_SPPBBC23']);
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
