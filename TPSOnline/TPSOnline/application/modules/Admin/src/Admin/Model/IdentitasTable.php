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

class IdentitasTable extends AbstractTableGateway
{
    protected $table;
	protected $adapter;
	public $connection;

    public function __construct(Adapter $adapter)
    {
        $this->adapter 		= $adapter;
        
		$this->sql 			= new Sql($this->adapter);
		$this->connection 	= $this->adapter->getDriver()->getConnection();
		$this->table 		= 'REF_IDENTITAS';
		
		$this->initialize();
    }
	
	public function fetchAll()
    {}
	
	public function jmlRows($userid)
	{}

    public function getData($data)
	{}
	
	public function save($data)
    {
        $aColumns = array('IDUSER'			=> $data['IDUSER'],
						  'NAMADEPAN'		=> $data['NAMADEPAN'],
						  'NAMABELAKANG' 	=> $data['NAMABELAKANG'],
						  'JNSKELAMIN'		=> $data['JNSKELAMIN'],
						  'TMPLAHIR'		=> $data['TMPLAHIR'],
						  'TGLLAHIR'		=> $data['TGLLAHIR'],
						  'EMAIL' 			=> $data['EMAIL'],
						  'TELP' 			=> $data['TELP'],
						  'HP'				=> $data['HP']);
		
		$sQuery	= $this->sql->insert($this->table)->values($aColumns);								
		$this->sql->prepareStatementForSqlObject($sQuery)->execute();
		
    }
	
	public function edit($data)
	{
		$aColumns = array('IDUSER'			=> $data['IDUSER'],
						  'NAMADEPAN'		=> $data['NAMADEPAN'],
						  'NAMABELAKANG' 	=> $data['NAMABELAKANG'],
						  'JNSKELAMIN'		=> $data['JNSKELAMIN'],
						  'TMPLAHIR'		=> $data['TMPLAHIR'],
						  'TGLLAHIR'		=> $data['TGLLAHIR'],
						  'EMAIL' 			=> $data['EMAIL'],
						  'TELP' 			=> $data['TELP'],
						  'HP'				=> $data['HP'],
						  'USERFILES'		=> $data['USERFILES']);
		
		$sQuery		= $this->sql->update($this->table)
								->set($aColumns)
								->where(array('IDUSER' => $data['IDUSER']));
							
		$this->sql->prepareStatementForSqlObject($sQuery)->execute();
	
	}
	
    public function delete($id)
    {}
	
}
