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
	Zend\Db\Sql\Delete,
	Zend\Db\Sql\TableIdentifier;

class UserTable extends AbstractTableGateway
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
	
	public function getLastUserId()
	{
		$sql 		= ' SELECT "IDUSER"
				   		FROM "USERS"
						WHERE substring("IDUSER",0,11) = '."'".date("dmyHi")."'".'
				   		ORDER BY "IDUSER" DESC';
	   
		$sQuery 	= $this->adapter->query($sql)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		if($result->current())
		{
			$LastId		= substr($result->current()->IDUSER,10,3) + 1;
			$LastId		= substr($result->current()->IDUSER,0,10).sprintf('%03d',$LastId);
		}else{
			$LastId 	= date("dmyHi").'001';
		}

		return $LastId;
	}
	
	public function fetchAll($IDUSER, $IDPERUSAHAAN=NULL, $ISADMIN=NULL)
    {
		$select 	= $this->sql->select();
		$selrows 	= $this->sql->select();
		
		$aColumns 	= array('a.IDUSER', 
							'a.IDUSER', 
							'a.USERNAME',
							'b.PERUSAHAAN',
							'c.NAMAGROUP',
							'd.NAMADEPAN',
							'd.EMAIL',
							'a.STATUS', 
							'd.NAMABELAKANG',
							'a.IDUSER');
		
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
		if($ISADMIN)
		{
			$select->where(array('"a"."IDUSER" != '."'".$IDUSER."'". ' 
								 AND "a"."FLAGS" = 0'), \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
			
			$selrows->where(array('"a"."IDUSER" != '."'".$IDUSER."'". ' 
								  AND "a"."FLAGS" = 0'), \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
								  
		}else{
			$select->where(array('"a"."IDUSER" != '."'".$IDUSER."'". '
								 AND "a"."ISADMIN" != 1
								 AND "a"."IDPERUSAHAAN" = '.$IDPERUSAHAAN.'
								 AND "a"."FLAGS" = 0'), \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
			
			$selrows->where(array('"a"."IDUSER" != '."'".$IDUSER."'". '
								  AND "a"."ISADMIN" != 1
								  AND "a"."IDPERUSAHAAN" = '.$IDPERUSAHAAN.'
								  AND "a"."FLAGS" = 0'), \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		}
		
		
		$select->from(array('a' => $this->table))
			   ->columns(array('IDUSER', 'USERNAME', 'STATUS'))
			   
			   ->join(array('b' => 'PERUSAHAAN'), 'b.IDPERUSAHAAN = a.IDPERUSAHAAN',
			   		  array('PERUSAHAAN' => 'NAMA'), $select::JOIN_LEFT)
					  
			   ->join(array('c' => 'GROUP'), 'c.IDGROUP = a.IDGROUP',
			   		  array('NAMAGROUP'), $select::JOIN_LEFT)
					  
			   ->join(array('d' => 'REF_IDENTITAS'), 'd.IDUSER = a.IDUSER',
			   		  array('NAMADEPAN', 'NAMABELAKANG', 'EMAIL', 'TELP', 'HP'), $select::JOIN_LEFT);

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
			
			if($entry['STATUS'] == "A"){
				$status	= '<span style="color:#060; font-weight:bold">Active</span>';
			}else{
				$status	= '<span style="color:#900; font-weight:bold">Inactive</span>';
			}
			
			$action	= '	<a data-href="'.BASEPATH.'/admin/user/edit/'.$entry['IDUSER'].'" rel="tooltip" title="Edit" class="ajaxify">
							<button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
						</a> 
						
                       	<a data-href="'.BASEPATH.'/admin/user/delete/'.$entry['IDUSER'].'" rel="tooltip" title="Delete" class="delete">
							<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button> 
						</a>';
	   		
			$row[]	= array( '<input type="checkbox" name="UID[]" id="UID" value="'.$entry['IDUSER'].'" class="checkboxes">',
							 $entry['IDUSER'],
							 $entry['USERNAME'],
							 $entry['PERUSAHAAN'],
							 $entry['NAMAGROUP'],
							 $entry['NAMADEPAN'].' '.$entry['NAMABELAKANG'], 
						 	 $entry['EMAIL'],  
							 $status, 
							 $action
							);
			$number++;
		}
		
		/**	ROW COUNT */
		$iTotal = $this->jmlRows($IDUSER, $IDPERUSAHAAN, $ISADMIN);
				   		
		if ( $sWhere != "" )
		{
			$selrows->from(array('a' => $this->table))
				    ->columns(array('IDUSER'))
				   
				    ->join(array('b' => 'PERUSAHAAN'), 'b.IDPERUSAHAAN = a.IDPERUSAHAAN',
						   array('IDPERUSAHAAN'), $select::JOIN_LEFT)				
						   	  
				    ->join(array('c' => 'GROUP'), 'c.IDGROUP = a.IDGROUP',
						   array('IDGROUP'), $select::JOIN_LEFT)
						  
				    ->join(array('d' => 'REF_IDENTITAS'), 'd.IDUSER = a.IDUSER',
						   array('IDIDENTITAS'), $select::JOIN_LEFT);
			
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
	
	public function jmlRows($IDUSER, $IDPERUSAHAAN=NULL, $ISADMIN=NULL)
	{
		$select 	= $this->sql->select();
		
		$select->from(array('a' => $this->table))
			   ->columns(array('IDUSER'))
			   
			   ->join(array('b' => 'PERUSAHAAN'), 'b.IDPERUSAHAAN = a.IDPERUSAHAAN',
					  array('IDPERUSAHAAN'), $select::JOIN_LEFT)
						
			   ->join(array('c' => 'GROUP'), 'c.IDGROUP = a.IDGROUP',
					  array('IDGROUP'), $select::JOIN_LEFT)
					
			   ->join(array('d' => 'REF_IDENTITAS'), 'd.IDUSER = a.IDUSER',
					  array('IDIDENTITAS'), $select::JOIN_LEFT);	   
		
		$where 		= new  Where();
        $where->notEqualTo('a.IDUSER', $IDUSER);
		if($ISADMIN)
		{
			$where->equalTo('a.FLAGS', 0);
		}else{
			$where->notEqualTo('a.ISADMIN', 1);
			$where->equalTo('a.IDPERUSAHAAN', $IDPERUSAHAAN);
			$where->equalTo('a.FLAGS', 0);
		}
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
			return $rows;
		}else{
			return 0;
		}
	}

    public function getData($data)
	{
		$select 	= $this->sql->select();
		
		$select->from(array('a' => $this->table))
			   ->columns(array('IDUSER', 'IDGROUP', 'IDPERUSAHAAN', 'USERNAME', 'SECRETKEY', 'ISADMIN'))
					  
			   ->join(array('b' => 'REF_IDENTITAS'), 'b.IDUSER = a.IDUSER',
			   		  array('IDIDENTITAS', 'NAMADEPAN', 'NAMABELAKANG', 
					  		'JNSKELAMIN', 'TMPLAHIR', 'TGLLAHIR', 'EMAIL', 
							'TELP', 'HP', 'USERFILES'), $select::JOIN_LEFT);
					  
		$where 		= new  Where();
        $where->equalTo('a.IDUSER', $data['IDUSER']);
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
        $aColumns = array('IDUSER'			=> $data['IDUSER'],
						  'IDPERUSAHAAN'	=> (int) $data['IDPERUSAHAAN'],
						  'USERNAME' 		=> $data['USERNAME'],
						  'PASSWORD' 		=> md5($data['PASSWORD']),
						  'IDGROUP' 		=> $data['IDGROUP'],
						  'SECRETKEY' 		=> $data['SECRETKEY'],
						  'TOKENID'			=> $data['TOKENID'],
						  'ISADMIN'			=> $data['ISADMIN'],
						  'STATUS'			=> 'A',
						  'CRBY' 			=> $data['CRBY'],
						  'CRDATE'			=> date("Y-m-d H:i:s"),
						  'MDBY' 			=> $data['MDBY'],
						  'MDDATE'			=> date("Y-m-d H:i:s"));
		
		$sQuery			= $this->sql->insert($this->table)->values($aColumns);
		$sQueryActivity	= $this->sql->insert("USERS_ACTIVITY")->values(array('IDUSER' 		=> $data['IDUSER'],
																			 'IDPERUSAHAAN'	=> (int) $data['IDPERUSAHAAN']));	
									
		$this->sql->prepareStatementForSqlObject($sQuery)->execute();
		$this->sql->prepareStatementForSqlObject($sQueryActivity)->execute();
		
    }
	
	public function edit($data)
	{
		$aColumns = array('IDPERUSAHAAN'	=> (int) $data['IDPERUSAHAAN'],
						  'PASSWORD' 		=> md5($data['PASSWORD']),
						  'IDGROUP' 		=> $data['IDGROUP'],
						  'SECRETKEY' 		=> $data['SECRETKEY'],
						  'TOKENID'			=> $data['TOKENID'],
						  'ISADMIN'			=> $data['ISADMIN'],
						  'MDBY' 			=> $data['MDBY'],
						  'MDDATE'			=> date("Y-m-d H:i:s"));
		
		$sQuery		= $this->sql->update($this->table)
								->set($aColumns)
								->where(array('IDUSER' => $data['IDUSER']));
							
		$this->sql->prepareStatementForSqlObject($sQuery)->execute();
		
	}
	
	
    public function delete($id)
    {
		$this->connection->beginTransaction();
		try 
		{
			$delete = $this->sql->delete($this->table);
			
			$where 		= new  Where();
			$where->equalTo('IDUSER', $id);
			$delete->where($where);
			
			//echo $delete->getSqlString($this->adapter->getPlatform()); exit();
			
			$this->executeDelete($delete);
			$this->connection->commit();

		} catch (Exception $e) {
			$this->connection->rollback();
		}
    }
	
	public function checkData($data)
	{	
        $sWhere		 = " WHERE LOWER(".'"USERNAME"'.") = '".strtolower($data['USERNAME'])."' "; 
		$sql 		 = " SELECT ".'"USERNAME"'." 
						 FROM ".'"'.$this->table.'"'." ".
						 $sWhere;
		
		$sQuery 		= $this->adapter->query($sql)->execute();
		$rResult 		= new ResultSet();
		$rResultTotal  	= $rResult->initialize($sQuery);
		
		if (!$rResultTotal) {
            throw new \Exception("Could not find rows");
        }
		
		$rows = count(array_values(iterator_to_array($rResultTotal)));
		return $rows;
	}
	
	public function checkID($data)
	{	
        $select 	= $this->sql->select();
		
		$select->from($this->table)
			   ->columns(array('IDUSER'));
		
		$where 		= new  Where();
        $where->equalTo('IDUSER', $data['IDUSER']);
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
	
	public function getUsername($data)
	{
		$select 	= $this->sql->select();
		
		$select->from($this->table);
		
		$where 		= new  Where();
        $where->equalTo('USERNAME', $data['USERNAME']);
        $select->where($where);
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		return $result->current()->IDUSER;
	}

}
