<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     ServiceModule
 */

namespace Service\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Select,
	Zend\Db\Sql\Sql,
	Zend\Db\Sql\Where,
	Zend\Db\Sql\Delete,
	Zend\Db\Sql\TableIdentifier;

use Service\Model\FunctionTable;

class ServiceTable extends AbstractTableGateway
{
    protected $table = "REF_MODUL";
	protected $adapter;
	protected $connection;

    public function __construct(Adapter $adapter)
    {
        $this->adapter 		= $adapter;
        
		$this->sql 			= new Sql($this->adapter);
		$this->connection 	= $this->adapter->getDriver()->getConnection();
		
		$this->initialize();
    }
	
	/** get sequences */
	public function getSecId($sequenceName, $schema=NULL)
	{
		$select 	= $this->sql->select();
		if($schema != NULL)
		{
			$select->from(new TableIdentifier($sequenceName, $schema));
		}else{
			$select->from($sequenceName);
		}
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		return $result->current()->last_value;
	}
	
	
	/** MODUL */
	public function getModules()
	{
		$select 	= $this->sql->select();
		
		$select->from('REF_MODUL')
			   ->columns(array('IDMODUL', 'ORDINAL', 'KODE'))
			   ->order('IDMODUL ASC');
		
		$where 		= new  Where();
		$where->notEqualTo('PARENT', 0);
		$where->equalTo('STATUS', 'A');
		$select->where($where);
			
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		return $result->toArray();
		
	}
	/** END MODUL */
	
	/** MENU */
	public function getMenu($param = NULL)
	{
		$parent = $this->getParentMenu();
		$sMenu	 = array();
		foreach($parent as $val_menu)
		{
			$child 		= $this->getChildMenu($val_menu['IDMENU'], 1, $param['IDUSER'], $param['IDGROUP']);
			$sMenuChild	= array();
			foreach($child as $val_child)
			{
				/**	=================================================== */
				$subChild 		= $this->getChildMenu($val_child['IDMENU'], 2, $param['IDUSER'], $param['IDGROUP']);
				$sMenuSubChild	= array();
				foreach($subChild as $val_subchild)
				{
					//$rowSubChild 	  = $this->checkChildMenu($val_subchild['IDMENU'], 3, $param['IDUSER'], $param['IDGROUP']);
					$rowSubChild 	  = false;
					$sMenuSubChild[]  = array("Menu"		=> $val_subchild['NAMA'],
											  "Kode"		=> $val_subchild['KODE'],
											  "Routes"		=> ($rowSubChild == true ? "#" : $val_subchild['ROUTES']),
											  "Rows"		=> $rowSubChild,
											  "Class"		=> $val_subchild['STYLES'],
											  "Child"		=> "");
				}
				
				/**	=================================================== */
				$rowChild 	  = $this->checkChildMenu($val_child['IDMENU'], 2, $param['IDUSER'], $param['IDGROUP']);
				
				if($rowChild == 1 AND count($subChild) < 1):
				else:
					$sMenuChild[] = array("Menu"		=> $val_child['NAMA'],
										  "Kode"		=> $val_child['KODE'],
										  "Routes"  	=> ($rowChild == true ? "#" : $val_child['ROUTES']),
										  "Rows"		=> $rowChild,
										  "Class"   	=> $val_child['STYLES'],
										  "Child"   	=> $sMenuSubChild);
				endif;
			}
			
			/**	=================================================== */
			$rowMenu = $this->checkChildMenu($val_menu['IDMENU'], 1, $param['IDUSER'], $param['IDGROUP']);
			if($rowMenu == 1 AND count($child) < 1):
			else:
				$sMenu[] = array("Menu"    		=> $val_menu['NAMA'],
								 "Kode"	   		=> $val_menu['KODE'],
								 "Routes" 		=> ($rowMenu == true ? "#" : $val_menu['ROUTES']),
								 "Rows"	   		=> $rowMenu,
								 "Class"   		=> $val_menu['STYLES'],
								 "Child"   		=> $sMenuChild);
			endif;
		}
		
		return $sMenu;
	}
	
	public function getParentMenu()
	{
		$select 	= $this->sql->select();
		
		$select->from('REF_MENU')
			   ->columns(array('IDMENU', 'KODE', 'NAMA', 'ROUTES', 'STYLES'))
			   ->order('KODE ASC');
		
		$where 		= new  Where();
		$where->equalTo('PARENT', 0);
		$where->equalTo('LEVEL', 0);
        $where->equalTo('STATUS', 'A');
        $select->where($where);
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		return $result->toArray();
	}
	
	public function getChildMenu($PARENT, $LEVEL, $IDUSER, $IDGROUP)
	{                  
		$sql	= "SELECT a.".'"IDMENU"'.", 
						  a.".'"KODE"'.",
						  a.".'"NAMA"'.",
						  a.".'"ROUTES"'.",
						  a.".'"STYLES"'."
				   FROM ".'"REF_MENU"'." a
				   LEFT JOIN ".'"REF_ROLES"'." b ON b.".'"IDMODUL"'." = a.".'"IDMODUL"'."
				   WHERE  (b.".'"IDUSER"'." = '".$IDUSER."' AND
						  b.".'"IDGROUP"'." = ".$IDGROUP." AND
						  b.".'"ROLEVIEW"'." = 1 OR
						  a.".'"IDMODUL"'." = 0) AND
						  
						  a.".'"PARENT"'." = ".$PARENT." AND
						  a.".'"LEVEL"'."	 = ".$LEVEL." AND
						  a.".'"STATUS"'." = 'A' 
				   ORDER BY a.".'"KODE"'." ASC";
		
		$sQuery 		= $this->adapter->query($sql)->execute();
		$rResult 		= new ResultSet();
		$rResultTotal  	= $rResult->initialize($sQuery);
		
		if (!$rResultTotal) {
			throw new \Exception("Could not find rows");
		}
		
		$result = array_values(iterator_to_array($rResultTotal));
		return $result;
	}
	
	public function checkChildMenu($parent, $level)
	{
		$select 	= $this->sql->select();
		
		$select->from('REF_MENU')
			   ->columns(array('IDMENU'));
		
		$where 		= new  Where();
		$where->equalTo('PARENT', $parent);
		$where->equalTo('LEVEL', $level);
        $where->equalTo('STATUS', 'A');
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
			return true;
		}else{
			return false;
		}
	}
	
	/** END MENU */
	
	/**	GROUP */
	public function fetchAllGroup($data)
	{	
		$select 	= $this->sql->select();
		
		$select->from('GROUP')
			   ->columns(array('IDGROUP', 'NAMAGROUP'))
		   	   ->order(array('NAMAGROUP ASC'));
		
		$where 		= new  Where();
		$where->equalTo('IDPERUSAHAAN', $data['IDPERUSAHAAN']);
        $where->equalTo('STATUS', 'A');
        $select->where($where);
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		return $result->toArray();
	}
	/**	END GROUP */
	
	public function fetchAllProvinsi()
	{	
		$select 	= $this->sql->select();
		
		$select->from('REF_PROVINSI')
			   ->order(array('PROVINSI ASC'));
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		return $result->toArray();
	}
	
	public function fetchAllKota($data)
	{	
		$select 	= $this->sql->select();
		
		$select->from('REF_KOTA')
			   ->order(array('KOTA ASC'));
		
		$where 		= new  Where();
        $where->equalTo('IDPROVINSI', $data['IDPROVINSI']);
        $select->where($where);
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		return $result->toArray();
	}
	
	/** BEGIN SDM */
	public function fetchAllPerusahaan($id=NULL)
	{	
		$select 	= $this->sql->select();
		
		$select->from('PERUSAHAAN')
			   ->columns(array('IDPERUSAHAAN','NAMA'))
		   	   ->order(array('PARENT ASC', 'NAMA ASC'));
		
		$where 		= new  Where();
		if($id != NULL)
		{
			$where->equalTo('IDPERUSAHAAN', $id);
		}
		$where->equalTo('STATUS', 'A');
		$select->where($where);
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		return $result->toArray();
	}
	
	public function fetchAllKodeDokumen()
	{	
		$select 	= $this->sql->select();
		
		$select->from(new TableIdentifier('DOKUMEN', SCHEMA_TPS))
			   ->columns(array('KD_DOK','NM_DOK'))
		   	   ->order(array('KD_DOK ASC'));
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		return $result->toArray();
	}
	
	public function fetchAllKodeDokInOut()
	{	
		$select 	= $this->sql->select();
		
		$select->from(new TableIdentifier('DOKUMEN_INOUT', SCHEMA_TPS))
			   ->columns(array('KD_DOK_INOUT','NM_DOK_INOUT'))
		   	   ->order(array('KD_DOK_INOUT ASC'));
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		return $result->toArray();
	}
	
	public function fetchAllFlCont()
	{	
		$select 	= $this->sql->select();
		
		$select->from(new TableIdentifier('FL_CONT', SCHEMA_TPS))
			   ->columns(array('ID_FL_CONT','NM_FL_CONT'))
		   	   ->order(array('ID_FL_CONT ASC'));
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		return $result->toArray();
	}
	
	public function fetchAllSarAngkut()
	{	
		$select 	= $this->sql->select();
		
		$select->from(new TableIdentifier('SAR_ANGKUT', SCHEMA_TPS))
			   ->columns(array('KD_SAR_ANGKUT','NM_SAR_ANGKUT'))
		   	   ->order(array('KD_SAR_ANGKUT ASC'));
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		return $result->toArray();
	}
	
	/** CONTAINER & KEMASAN*/
	public function fetchAllCont($param)
    {
		$select 	= $this->sql->select();
		$selrows 	= $this->sql->select();
		
		$aColumns[] = 'ID_CONT';
		if($param['REFF'] == 'SPPBPIB'):
			$aColumns[] = 'CAR';
			$aColumns[] = 'NO_CONT';
			$aColumns[] = 'SIZE';
			$aColumns[] = 'JNS_MUAT';
		
		elseif($param['REFF'] == 'NPE'):
			$aColumns[] = 'CAR';
			$aColumns[] = 'NO_CONT';
			$aColumns[] = 'SERI_CONT';
			$aColumns[] = 'SIZE';
		
		elseif($param['REFF'] == 'SPPBBC12'):
			$aColumns[] = 'NO_CONT';
			$aColumns[] = 'SIZE';
			$aColumns[] = 'JNS_MUAT';
		
		elseif($param['REFF'] == 'SPPBBC23'):
			$aColumns[] = 'CAR';
			$aColumns[] = 'NO_CONT';
			$aColumns[] = 'SIZE';
			$aColumns[] = 'JNS_MUAT';
		endif;
		
		
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
		$select->where(array('1 = 1'),
					   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		$selrows->where(array('1 = 1 '),
						\Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		
		if($param['REFF'] == 'SPPBPIB'):
			$select->where(array('"ID_SPPBPIB" = '.$param['ID_SPPBPIB'].' '),
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
			$selrows->where(array('"ID_SPPBPIB" = '.$param['ID_SPPBPIB'].' '),
							\Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
		
		if($param['REFF'] == 'NPE'):
			$select->where(array('"ID_NPE" = '.$param['ID_NPE'].' '), 
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
			$selrows->where(array('"ID_NPE" = '.$param['ID_NPE'].' '), 
							\Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
		
		if($param['REFF'] == 'SPPBBC12'):
			$select->where(array('"ID_SPPBBC12" = '.$param['ID_SPPBBC12'].' '),
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
			$selrows->where(array('"ID_SPPBBC12" = '.$param['ID_SPPBBC12'].' '),
							\Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
		
		if($param['REFF'] == 'SPPBBC23'):
			$select->where(array('"ID_SPPBBC23" = '.$param['ID_SPPBBC23'].' '),
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
			$selrows->where(array('"ID_SPPBBC23" = '.$param['ID_SPPBBC23'].' '),
							\Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
			
		
		$select->from(new TableIdentifier('CONT', SCHEMA_TPS));

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
			if($param['REFF'] == 'SPPBPIB'):
				$row[]	= array(($number + $_GET['iDisplayStart']),
								$entry['CAR'],
								$entry['NO_CONT'],
								$entry['SIZE'],
								$entry['JNS_MUAT']
								);

			elseif($param['REFF'] == 'NPE'):
				$row[]	= array(($number + $_GET['iDisplayStart']),
								$entry['CAR'],
								$entry['NO_CONT'],
								$entry['SERI_CONT'],
								$entry['SIZE']
								);

			elseif($param['REFF'] == 'SPPBBC12'):
				$row[]	= array(($number + $_GET['iDisplayStart']),
								$entry['NO_CONT'],
								$entry['SIZE'],
								$entry['JNS_MUAT']
								);

			elseif($param['REFF'] == 'SPPBBC23'):
				$row[]	= array(($number + $_GET['iDisplayStart']),
								$entry['CAR'],
								$entry['NO_CONT'],
								$entry['SIZE'],
								$entry['JNS_MUAT']
								);
			endif;
	   		
			$number++;
		}
		
		/**	ROW COUNT */
		$iTotal = $this->jmlRowsCont($param);
	   		
		if ( $sWhere != "" )
		{
			$selrows->from(new TableIdentifier('CONT', SCHEMA_TPS))
			   		->columns(array('ID_CONT'));
			
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
	
	public function jmlRowsCont($param)
	{
		$select 	= $this->sql->select();
		
		$select->from(new TableIdentifier('CONT', SCHEMA_TPS))
			   ->columns(array('ID_CONT'));
		
		$select->where(array('1 = 1'),
					   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		
		if($param['REFF'] == 'SPPBPIB'):
			$select->where(array('"ID_SPPBPIB" = '.$param['ID_SPPBPIB'].' '),
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
		
		if($param['REFF'] == 'NPE'):
			$select->where(array('"ID_NPE" = '.$param['ID_NPE'].' '),
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
		
		if($param['REFF'] == 'SPPBBC12'):
			$select->where(array('"ID_SPPBBC12" = '.$param['ID_SPPBBC12'].' '),
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
		
		if($param['REFF'] == 'SPPBBC23'):
			$select->where(array('"ID_SPPBBC23" = '.$param['ID_SPPBBC23'].' '),
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
	
	public function fetchAllKms($param)
    {
		$select 	= $this->sql->select();
		$selrows 	= $this->sql->select();
		
		$aColumns[] = 'ID_KMS';
		if($param['REFF'] == 'SPPBPIB'):
			$aColumns[] = 'CAR';
			$aColumns[] = 'JNS_KMS';
			$aColumns[] = 'MERK_KMS';
			$aColumns[] = 'JML_KMS';
		
		elseif($param['REFF'] == 'NPE'):
			$aColumns[] = 'CAR';
			$aColumns[] = 'JNS_KMS';
			$aColumns[] = 'JML_KMS';
		
		elseif($param['REFF'] == 'SPPBBC12'):
			$aColumns[] = 'JNS_KMS';
			$aColumns[] = 'MERK_KMS';
			$aColumns[] = 'JML_KMS';
		
		elseif($param['REFF'] == 'SPPBBC23'):
			$aColumns[] = 'CAR';
			$aColumns[] = 'JNS_KMS';
			$aColumns[] = 'MERK_KMS';
			$aColumns[] = 'JML_KMS';
		endif;
		
		
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
		$select->where(array('1 = 1'),
					   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		$selrows->where(array('1 = 1 '),
						\Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		
		if($param['REFF'] == 'SPPBPIB'):
			$select->where(array('"ID_SPPBPIB" = '.$param['ID_SPPBPIB'].' '),
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
			$selrows->where(array('"ID_SPPBPIB" = '.$param['ID_SPPBPIB'].' '),
							\Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
		
		if($param['REFF'] == 'NPE'):
			$select->where(array('"ID_NPE" = '.$param['ID_NPE'].' '), 
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
			$selrows->where(array('"ID_NPE" = '.$param['ID_NPE'].' '), 
							\Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
		
		if($param['REFF'] == 'SPPBBC12'):
			$select->where(array('"ID_SPPBBC12" = '.$param['ID_SPPBBC12'].' '),
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
			$selrows->where(array('"ID_SPPBBC12" = '.$param['ID_SPPBBC12'].' '),
							\Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
		
		if($param['REFF'] == 'SPPBBC23'):
			$select->where(array('"ID_SPPBBC23" = '.$param['ID_SPPBBC23'].' '),
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
			$selrows->where(array('"ID_SPPBBC23" = '.$param['ID_SPPBBC23'].' '),
							\Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
			
		
		$select->from(new TableIdentifier('KMS', SCHEMA_TPS));

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
			if($param['REFF'] == 'SPPBPIB'):
				$row[]	= array(($number + $_GET['iDisplayStart']),
								$entry['CAR'],
								$entry['JNS_KMS'],
								$entry['MERK_KMS'],
								$entry['JML_KMS']
								);

			elseif($param['REFF'] == 'NPE'):
				$row[]	= array(($number + $_GET['iDisplayStart']),
								$entry['CAR'],
								$entry['JNS_KMS'],
								$entry['JML_KMS']
								);

			elseif($param['REFF'] == 'SPPBBC12'):
				$row[]	= array(($number + $_GET['iDisplayStart']),
								$entry['JNS_KMS'],
								$entry['MERK_KMS'],
								$entry['JML_KMS']
								);

			elseif($param['REFF'] == 'SPPBBC23'):
				$row[]	= array(($number + $_GET['iDisplayStart']),
								$entry['CAR'],
								$entry['JNS_KMS'],
								$entry['MERK_KMS'],
								$entry['JML_KMS']
								);
			endif;
	   		
			$number++;
		}
		
		/**	ROW COUNT */
		$iTotal = $this->jmlRowsKms($param);
	   		
		if ( $sWhere != "" )
		{
			$selrows->from(new TableIdentifier('KMS', SCHEMA_TPS))
			   		->columns(array('ID_KMS'));
			
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
	
	public function jmlRowsKms($param)
	{
		$select 	= $this->sql->select();
		
		$select->from(new TableIdentifier('KMS', SCHEMA_TPS))
			   ->columns(array('ID_KMS'));
		
		$select->where(array('1 = 1'),
					   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		
		if($param['REFF'] == 'SPPBPIB'):
			$select->where(array('"ID_SPPBPIB" = '.$param['ID_SPPBPIB'].' '),
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
		
		if($param['REFF'] == 'NPE'):
			$select->where(array('"ID_NPE" = '.$param['ID_NPE'].' '),
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
		
		if($param['REFF'] == 'SPPBBC12'):
			$select->where(array('"ID_SPPBBC12" = '.$param['ID_SPPBBC12'].' '),
						   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		endif;
		
		if($param['REFF'] == 'SPPBBC23'):
			$select->where(array('"ID_SPPBBC23" = '.$param['ID_SPPBBC23'].' '),
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
	
	public function fetchAllPos($param)
    {
		$select 	= $this->sql->select();
		$selrows 	= $this->sql->select();
		
		$aColumns 	= array('ID_POS',
							'NO_POS', 
							'CONSIGNEE', 
							'UR_JNS_BARANG', 
							'JML_KMS', 
							'JNS_KMS',
						   	'ID_PENDUKUNGPLP');
		
		
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
		$select->where(array('1 = 1'),
					   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		$selrows->where(array('1 = 1 '),
						\Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		
		$select->where(array('"ID_PENDUKUNGPLP" = '.$param['ID_PENDUKUNGPLP'].' '),
					   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		$selrows->where(array('"ID_PENDUKUNGPLP" = '.$param['ID_PENDUKUNGPLP'].' '),
						\Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
			
		$select->from(new TableIdentifier('POS', SCHEMA_TPS));

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
							$entry['NO_POS'],
							$entry['CONSIGNEE'],
							$entry['UR_JNS_BARANG'],
							$entry['JML_KMS'],
							$entry['JNS_KMS']
							);
	   		
			$number++;
		}
		
		/**	ROW COUNT */
		$iTotal = $this->jmlRowsPos($param);
	   		
		if ( $sWhere != "" )
		{
			$selrows->from(new TableIdentifier('POS', SCHEMA_TPS))
			   		->columns(array('ID_POS'));
			
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
	
	public function jmlRowsPos($param)
	{
		$select 	= $this->sql->select();
		
		$select->from(new TableIdentifier('POS', SCHEMA_TPS))
			   ->columns(array('ID_POS'));
		
		$select->where(array('1 = 1'),
					   \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		
		$select->where(array('"ID_PENDUKUNGPLP" = '.$param['ID_PENDUKUNGPLP'].' '),
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
	
	public function isAuth($data)
	{	
		$select 	= $this->sql->select();
		
		$select->from("USERS")
			   ->columns(array('IDUSER'));
		
		$where 		= new  Where();
        $where->equalTo('USERNAME', $data['USERNAME'])
			  ->equalTo('PASSWORD', md5($data['PASSWORD']))
			  ->equalTo('STATUS', "A");
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
			return true;
		}else{
			return false;
		}
	}
	
	public function updateTimerUser($IDUSER)
	{
		$aColumns = array('TIMER' => date("Y-m-d H:i:s"));
		$this->connection->beginTransaction();
		try {
			$sQuery			= $this->sql->update("USERS_ACTIVITY")
										->set($aColumns)
										->where(array('IDUSER' => $IDUSER ));
			
			$sQueryTrigger	= $this->sql->update("USERS")
										->set($aColumns)
										->where(array('IDUSER' => $IDUSER ));
								
			$this->sql->prepareStatementForSqlObject($sQuery)->execute();
			$this->sql->prepareStatementForSqlObject($sQueryTrigger)->execute();
			$this->connection->commit();
			
		} catch (Exception $e) {
			$this->connection->rollback();
		}
	}
	
	public function testing()
	{	
		
		$sOrder = "ORDER BY  NAMAGROUP DESC";
		$sOrder = substr_replace( $sOrder, "", -2 );
		echo $sOrder;
		exit();
		$select 	= $this->sql->select();
		
		$select->from(array('a' => 'USERS'), 
					  array('IDUSER'))
			   ->join(array('b' => 'REF_IDENTITAS'), 'b.IDUSER = a.IDUSER',
			   		  array('NAMADEPAN'))
			   ->join(array('c' => 'GROUP'), 'c.IDGROUP = a.IDGROUP',
			   		  array('NAMAGROUP'));
		
		$where 		= new  Where();
        $where->equalTo('a.STATUS', 'A')
			  ->equalTo('a.IDUSER', '2102152248001');
			  
        $select->where($where);
		
		//$select->getSqlString($this->adapter->getPlatform());

		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
	
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		return $result->toArray();

	}	

}

/**
$sWhere		 = " WHERE LOWER(".'"NIP"'.") = '".strtolower($data['NIP'])."' ";                  
$sql 		 = " SELECT ".'"IDPEGAWAI"'." 
                 FROM sdm.".'"PEGAWAI"'." ".
                 $sWhere;

$sQuery 		= $this->adapter->query($sql)->execute();
$rResult 		= new ResultSet();
$rResultTotal  	= $rResult->initialize($sQuery);

if (!$rResultTotal) {
    throw new \Exception("Could not find rows");
}

$rows = count(array_values(iterator_to_array($rResultTotal)));
return $rows;


$select->from(array('a' => 'REF_MENU'))
			   ->columns(array('IDMENU', 'KODE', 'NAMA', 'ROUTES', 'STYLES'))
					  
			   ->join(array('b' => 'REF_ROLES'), 'b.IDMODUL = a.IDMODUL',
			   		  array('IDROLE'), $select::JOIN_LEFT)
					  
			   ->order('a.KODE ASC');
		
		$where 		= new  Where();
		$where->equalTo('b.IDGROUP', 1);
		$where->equalTo('b.IDUSER', '2102152248001');
		$where->equalTo('b.ROLEVIEW', 1);
		$where->__get('OR')->equalTo('a.IDMODUL', 0);
		
		$where->equalTo('a.PARENT', $parent);
		$where->equalTo('a.LEVEL', $level);
        $where->equalTo('a.STATUS', 'A');
        $select->where($where);
*/
