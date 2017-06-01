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


class GroupTable extends AbstractTableGateway
{
    protected $table;
	protected $adapter;
	public $connection;

    public function __construct(Adapter $adapter)
    {
        $this->adapter 		= $adapter;
        
		$this->sql 			= new Sql($this->adapter);
		$this->connection 	= $this->adapter->getDriver()->getConnection();
		$this->table 		= 'GROUP';
		
		$this->initialize();
    }
	
	public function fetchAll($param)
    {
		$select 	= $this->sql->select();
		$selrows 	= $this->sql->select();
		
		$aColumns 	= array( 'IDGROUP', 'IDGROUP', 'NAMAGROUP', 'KETERANGAN');
		
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
		$select->where(array('"IDPERUSAHAAN" = '."'".$param['IDPERUSAHAAN']."'". ' 
							 AND "FLAGS" = 0 
							 AND "STATUS" = '."'A'".' '), \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);

		$selrows->where(array('"IDPERUSAHAAN" = '."'".$param['IDPERUSAHAAN']."'". ' 
							  AND "FLAGS" = 0 
							  AND "STATUS" = '."'A'".' '), \Zend\Db\Sql\Predicate\PredicateSet::OP_AND);
		
		$select->from($this->table)
			   ->columns(array('IDGROUP', 'NAMAGROUP', 'KETERANGAN'));
		
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
			
			$action	= '	<a data-href="'.BASEPATH.'/admin/group/edit/'.$entry['IDGROUP'].'" rel="tooltip" title="Edit" class="ajaxify">
							<button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
						</a>
                       	<a data-href="'.BASEPATH.'/admin/group/delete/'.$entry['IDGROUP'].'" rel="tooltip" title="Delete" class="delete">
							<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button> 
						</a>';
	   		
			$row[]	= array( '<input type="checkbox" name="UID[]" id="UID" value="'.$entry['IDGROUP'].'" class="checkboxes">',
						 	 $entry['IDGROUP'],
						 	 $entry['NAMAGROUP'], 
						 	 $entry['KETERANGAN'],
							 $action
							);
			$number++;
		}
		
		/**	ROW COUNT */
		$iTotal = $this->jmlRows($param);
				   		
		if ( $sWhere != "" )
		{
			$selrows->from($this->table)
			   	    ->columns(array('IDGROUP'));
			   	
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
		$select->from($this->table)
			   ->columns(array('IDGROUP'));
		
		$where 		= new  Where();
		
		$where->equalTo('IDPERUSAHAAN', $param['IDPERUSAHAAN']);
		$where->equalTo('FLAGS', 0);
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
			   ->columns(array('IDGROUP', 'NAMAGROUP', 'KETERANGAN', 'ISADMIN', 'STATUS'));
		
		$where 		= new  Where();
        $where->equalTo('IDGROUP', $data['IDGROUP']);
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

       	$aColumns = array('IDPERUSAHAAN'	=> (int) $data['IDPERUSAHAAN'],
						  'NAMAGROUP' 		=> $data['NAMAGROUP'],
						  'KETERANGAN' 		=> $data['KETERANGAN'],
						  'ISADMIN'			=> $data['ISADMIN'],
						  'CRBY' 			=> $data['CRBY'],
						  'CRDATE'			=> date("Y-m-d H:i:s"),
						  'MDBY' 			=> $data['MDBY'],
						  'MDDATE'			=> date("Y-m-d H:i:s"));

		$this->connection->beginTransaction();
		
		try {
			
			$sQuery	= $this->sql->insert($this->table)->values($aColumns);								
			$this->sql->prepareStatementForSqlObject($sQuery)->execute();
			
			$this->connection->commit();

			
		} catch (Exception $e) {
			$this->connection->rollback();
		}

    }
	
	public function edit($data)
	{
		$aColumns = array('IDPERUSAHAAN'	=> (int) $data['IDPERUSAHAAN'],
						  'NAMAGROUP' 		=> $data['NAMAGROUP'],
						  'KETERANGAN' 		=> $data['KETERANGAN'],
						  'ISADMIN'			=> $data['ISADMIN'],
						  'MDBY' 			=> $data['MDBY'],
						  'MDDATE'			=> date("Y-m-d H:i:s"));
		
		$this->connection->beginTransaction();
		
		try {
			
			$sQuery		= $this->sql->update($this->table)
									->set($aColumns)
									->where(array('IDGROUP' => (int) $data['IDGROUP'] ));
								
			$this->sql->prepareStatementForSqlObject($sQuery)->execute();
			$this->deleteRole($data['IDGROUP']);
			$this->connection->commit();
			
			
		} catch (Exception $e) {
			$this->connection->rollback();
		}
	}
	
	
    public function delete($id)
    {
		$this->connection->beginTransaction();
		try {
			
			$delete = $this->sql->delete($this->table);
			
			$where 		= new  Where();
			$where->equalTo('IDGROUP', $id);
			$delete->where($where);
			
			//echo $delete->getSqlString($this->adapter->getPlatform()); exit();
			
			$this->executeDelete($delete);
			$this->deleteRole($id);
			$this->connection->commit();
			
		} catch (Exception $e) {
			$this->connection->rollback();
		}
		
    }
	
	public function checkData($data)
	{
		
		$select 	= $this->sql->select();
		
		$select->from($this->table)
			   ->columns(array('NAMAGROUP'));
		
		$where 		= new  Where();
        $where->equalTo(new \Zend\Db\Sql\Predicate\Expression('LOWER("NAMAGROUP")'), strtolower($data['NAMAGROUP']));
		if(isset($data['CURRENTNAMAGROUP']))
		{
			$where->notEqualTo(new \Zend\Db\Sql\Predicate\Expression('LOWER("NAMAGROUP")'), strtolower($data['CURRENTNAMAGROUP']));
		}
		
        $select->where($where);
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		$rows = count(array_values(iterator_to_array($result)));
		return $rows;
	}
	
	public function checkID($data)
	{	
        $select 	= $this->sql->select();
		
		$select->from($this->table)
			   ->columns(array('IDGROUP'));
		
		$where 		= new  Where();
        $where->equalTo('IDGROUP', $data['IDGROUP']);
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
	
	/**	Coloms table module */
	public function getTabsModules($group_id = NULL, $params = NULL)
	{
		$parent = $this->getParentModules($params);
		$sTabs	 = array();
		foreach($parent as $val_menu)
		{
			$child 			= $this->getChildModules($val_menu['IDMODUL'], $params);
			$childModules	= array();
			foreach($child as $val_child)
			{
				/**	=================================================== */
				if($group_id != NULL)
				{
					$data['IDGROUP'] = $group_id;
					$data['IDMODUL'] = $val_child['IDMODUL'];
					$roles	= $this->checkRole($data);
					
					if($roles)
					{
						if($roles->ROLEADD == 1)
						{
							$checkAdd = 'checked';
						}else{
							$checkAdd = '';
						}
						
						if($roles->ROLEVIEW == 1)
						{
							$checkView = 'checked';
						}else{
							$checkView = '';
						}
						
						if($roles->ROLEEDIT == 1)
						{
							$checkEdit = 'checked';
						}else{
							$checkEdit = '';
						}
						
						if($roles->ROLEDEL == 1)
						{
							$checkDel = 'checked';
						}else{
							$checkDel = '';
						}
						
						if($roles->ROLERIP == 1)
						{
							$checkRip = 'checked';
						}else{
							$checkRip = '';
						}
					}else{
						$checkAdd = '';
						$checkView = '';
						$checkEdit = '';
						$checkDel = '';
						$checkRip = '';
					}
				}else{
					$checkAdd = '';
					$checkView = '';
					$checkEdit = '';
					$checkDel = '';
					$checkRip = '';
				}
				
				
				$childModules[] = array("IDMODUL"	=> $val_child['IDMODUL'],
										"NAMAMODUL"	=> $val_child['NAMAMODUL'],
										"checkAdd"  => $checkAdd,
										"checkView" => $checkView,
										"checkEdit" => $checkEdit,
										"checkDel"  => $checkDel,
										"checkRip"  => $checkRip);
			}
			
			/**	=================================================== */
			$sTabs[] = array("TABID"   		=> $val_menu['KODE'],
							 "TabActive" 	=> ($val_menu['ORDINAL'] == 1 ? 'active' : ''),
							 "ORDINAL"		=> $val_menu['ORDINAL'],
							 "Child"   		=> $childModules);
		}
		
		return $sTabs;
		
	}
	
	public function getParentModules($data = NULL)
	{
		$select 	= $this->sql->select();

		$select->from('REF_MODUL')
			   ->columns(array('IDMODUL', 'ORDINAL', 'KODE', 'NAMAMODUL'))
			   ->order('IDMODUL ASC');

		$where 		= new  Where();
		$where->equalTo('PARENT', 0);
		$where->equalTo('STATUS', 'A');
		$select->where($where);
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		$rows	= $result->toArray();
		return $rows;
		
	}
	
	public function getChildModules($parent, $data = NULL)
	{
		$select 	= $this->sql->select();
		
		$select->from('REF_MODUL')
			   ->columns(array('IDMODUL', 'ORDINAL', 'KODE', 'NAMAMODUL'))
			   ->order('IDMODUL ASC');

		$where 		= new  Where();
		$where->equalTo('PARENT', $parent);
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
	
	public function checkRole($data)
	{
		$select 	= $this->sql->select();
		
		$select->from('REF_ROLES_GROUP')
			   ->columns(array('ROLEADD', 'ROLEVIEW', 'ROLEEDIT', 'ROLEDEL', 'ROLERIP'));
		
		$where 		= new  Where();
		$where->equalTo('IDGROUP', $data['IDGROUP']);
		$where->equalTo('IDMODUL', $data['IDMODUL']);
		
        $select->where($where);
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		$rows	= $result->current();
		return $rows;
		
	}
	
	public function getModules($data = NULL)
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
	
	/**	Coloms table roles */
	public function saveRole($data) 
	{	

		$aColumns = array('ORDINAL'			=> $data['ORDINAL'],
						  'IDMODUL' 		=> $data['IDMODUL'],
						  'IDGROUP' 		=> $data['IDGROUP'],
						  'ROLEADD' 		=> $data['ROLEADD'],
						  'ROLEVIEW' 		=> $data['ROLEVIEW'],
						  'ROLEEDIT' 		=> $data['ROLEEDIT'],
						  'ROLEDEL' 		=> $data['ROLEDEL'],
						  'ROLERIP' 		=> $data['ROLERIP'],
						  'CRBY' 			=> $data['CRBY'],
						  'CRDATE'			=> date("Y-m-d H:i:s"),
						  'MDBY' 			=> $data['MDBY'],
						  'MDDATE'			=> date("Y-m-d H:i:s")
						  );
		
		$this->connection->beginTransaction();
		
		try {
			
			$sQuery	= $this->sql->insert("REF_ROLES_GROUP")->values($aColumns);
			//echo $insert->getSqlString($this->adapter->getPlatform()); exit();								
			$this->sql->prepareStatementForSqlObject($sQuery)->execute();
			
			$this->connection->commit();

			
		} catch (Exception $e) {
			$this->connection->rollback();
		}
		
	}
	
	public function updateRole($data) 
	{
		if($this->jmlRowsRole($data) > 0)
		{
			$aColumns = array('ORDINAL'			=> $data['ORDINAL'],
							  'IDMODUL' 		=> $data['IDMODUL'],
							  'IDGROUP' 		=> $data['IDGROUP'],
							  'ROLEADD' 		=> $data['ROLEADD'],
							  'ROLEVIEW' 		=> $data['ROLEVIEW'],
							  'ROLEEDIT' 		=> $data['ROLEEDIT'],
							  'ROLEDEL' 		=> $data['ROLEDEL'],
							  'ROLERIP' 		=> $data['ROLERIP'],
							  'MDBY' 			=> $data['MDBY'],
							  'MDDATE'			=> date("Y-m-d H:i:s")
							  );
			
			$this->connection->beginTransaction();
		
			try {
				
				$sQuery		= $this->sql->update('REF_ROLES_GROUP')
										->set($aColumns)
										->where(array('IDGROUP'	=> (int) $data['IDGROUP'],
													  'IDMODUL'	=> (int) $data['IDMODUL']));
									
				$this->sql->prepareStatementForSqlObject($sQuery)->execute();
				
				$this->connection->commit();
				
			} catch (Exception $e) {
				$this->connection->rollback();
			}
			
		}else{
			$this->saveRole($data);
		}
	}
	
	public function jmlRowsRole($data)
	{
		$select 	= $this->sql->select();
		
		$select->from('REF_ROLES_GROUP');
		
		$where 		= new  Where();
        $where->equalTo('IDGROUP', $data['IDGROUP'])
			  ->equalTo('IDMODUL', $data['IDMODUL']);
        $select->where($where);
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		$rows = array_values(iterator_to_array($result));
		return count($rows);

	}
	
	public function getDataRole($data)
	{
		$select 	= $this->sql->select();
		
		$select->from(array('a' => 'REF_ROLES_GROUP'),
					  array('ROLEADD', 'ROLEVIEW', 'ROLEEDIT', 'ROLEDEL', 'ROLERIP'))
			   ->join(array('b' => 'REF_MODUL'), 'b.IDMODUL = a.IDMODUL',
			   		  array('IDMODUL'))
			   ->order('a.IDMODUL ASC');
		
		$where 		= new  Where();
		$where->equalTo('a.IDGROUP', $data['IDGROUP']);
		$where->notEqualTo('b.PARENT', 0);
		$where->equalTo('b.STATUS', 'A');
		
        $select->where($where);
		
		$sQuery 	= $this->sql->prepareStatementForSqlObject($select)->execute();
		$resultSet 	= new ResultSet();
		$result		= $resultSet->initialize($sQuery);
		
		if (!$result) {
            throw new \Exception("Could not find rows");
        }
		
		$rows	= $result->toArray();
		return $rows;
		
	}
	
	public function deleteRole($id)
    {
		$sql 	= "DELETE FROM ".'"REF_ROLES_GROUP"'." WHERE ".'"IDGROUP"'."=".$id;
		$sQuery = $this->adapter->query($sql)->execute();
    }

}
