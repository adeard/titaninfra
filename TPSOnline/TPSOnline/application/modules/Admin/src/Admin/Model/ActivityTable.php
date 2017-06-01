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

class ActivityTable extends AbstractTableGateway
{
    protected $table;
	protected $adapter;
	public $connection;

    public function __construct(Adapter $adapter)
    {
        $this->adapter 		= $adapter;
        
		$this->sql 			= new Sql($this->adapter);
		$this->connection 	= $this->adapter->getDriver()->getConnection();
		$this->table 		= 'USERS';
		
		$this->initialize();
    }
	
	public function fetchAll()
    {
		$select 	= $this->sql->select();
		$selrows 	= $this->sql->select();
		
		$aColumns 	= array('a.IDUSER', 
							'a.USERNAME',
							'b.NAMA',
							'c.NAMAGROUP',
							'd.NAMADEPAN', 
							'd.NAMABELAKANG',
							'e.LASTADDR', 
							'e.DETECT_OS', 
							'e.BROWSER', 
							'e.LASTLOGIN', 
							'e.LOGOUT', 
							'e.LOGINSTATUS');
		
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
		$select->from(array('a' => $this->table))
			   ->columns(array('IDUSER', 'USERNAME'))
			   
			   ->join(array('b' => 'PERUSAHAAN'), 'b.IDPERUSAHAAN = a.IDPERUSAHAAN',
			   		  array('NAMA'), $select::JOIN_LEFT)
					  
			   ->join(array('c' => 'GROUP'), 'c.IDGROUP = a.IDGROUP',
			   		  array('NAMAGROUP'), $select::JOIN_LEFT)
					  
			   ->join(array('d' => 'REF_IDENTITAS'), 'd.IDUSER = a.IDUSER',
			   		  array('NAMADEPAN', 'NAMABELAKANG'), $select::JOIN_LEFT)
					  
			   ->join(array('e' => 'USERS_ACTIVITY'), 'e.IDUSER = a.IDUSER',
			   		  array('LASTADDR', 'DETECT_OS', 'BROWSER', 'LASTLOGIN', 'LOGOUT', 'LOGINSTATUS'), $select::JOIN_LEFT);

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
			
			if($entry['LOGINSTATUS'] == 1){
				$status	= '<button class="btn green btn-sm"><i class="fa fa-smile-o"></i></button>
						   <span style="color:#060; font-weight:bold">Active</span>'; 
			}elseif($entry['LOGINSTATUS'] == 2){
				$status	= '<button class="btn purple btn-sm"><i class="fa  fa-meh-o"></i></button>
						   <span style="color:#8B008B; font-weight:bold">Idle</span>';
			}else{
				$status	= '<button class="btn red btn-sm"><i class="fa fa-frown-o"></i></button>
						   <span style="color:#900; font-weight:bold">Logout</span>';
			}

			$row[]	= array(($number + $_GET['iDisplayStart']),
							 $entry['USERNAME'],
							 $entry['NAMA'], 
							 $entry['NAMAGROUP'],
							 $entry['NAMADEPAN'].' '.$entry['NAMABELAKANG'], 
						 	 $entry['LASTADDR'], 
							 $entry['DETECT_OS'],
							 $entry['BROWSER'],
							 $entry['LASTLOGIN'],
							 $entry['LOGOUT'],
							 $status
							);
			$number++;
		}
		
		/**	ROW COUNT */
		$iTotal = $this->jmlRows();
				   		
		if ( $sWhere != "" )
		{
			$selrows->from(array('a' => $this->table))
				    ->columns(array('IDUSER'))
				   
				    ->join(array('b' => 'PERUSAHAAN'), 'b.IDPERUSAHAAN = a.IDPERUSAHAAN',
						   array('NAMA'), $select::JOIN_LEFT)
						  
				    ->join(array('c' => 'GROUP'), 'c.IDGROUP = a.IDGROUP',
						   array('NAMAGROUP'), $select::JOIN_LEFT)
						  
				    ->join(array('d' => 'REF_IDENTITAS'), 'd.IDUSER = a.IDUSER',
						   array('NAMADEPAN'), $select::JOIN_LEFT)
						   
					->join(array('e' => 'USERS_ACTIVITY'), 'e.IDUSER = a.IDUSER',
			   		  	   array('IDUSERACTIVITY'), $select::JOIN_LEFT);
			
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
	
	public function jmlRows()
	{
		$select 	= $this->sql->select();
		
		$select->from(array('a' => $this->table))
			   ->columns(array('IDUSER'))
			   
			   ->join(array('b' => 'PERUSAHAAN'), 'b.IDPERUSAHAAN = a.IDPERUSAHAAN',
			   		  array('NAMA'), $select::JOIN_LEFT)
					  
			   ->join(array('c' => 'GROUP'), 'c.IDGROUP = a.IDGROUP',
			   		  array('NAMAGROUP'), $select::JOIN_LEFT)
					  
			   ->join(array('d' => 'REF_IDENTITAS'), 'd.IDUSER = a.IDUSER',
			   		  array('NAMADEPAN'), $select::JOIN_LEFT)
					  
			   ->join(array('e' => 'USERS_ACTIVITY'), 'e.IDUSER = a.IDUSER',
			   		  array('IDUSERACTIVITY'), $select::JOIN_LEFT);
		
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
}
