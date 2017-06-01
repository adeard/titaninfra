<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     PenerimaanModule
 */

namespace Penerimaan\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use	Zend\Config\Reader\Xml;
	
class Sppbbc23Controller extends AbstractActionController
{
    protected $sTable;
	protected $authservice;
	protected $privilege;
	protected $service;
	
	public function __construct()
    {
        $this->request	= $this->getRequest();
	
    }
	
	/**	Service Authentivication */
	public function getAuthService()
    {
        if (! $this->authservice) {
            $this->authservice = $this->getServiceLocator()
                                      ->get('AuthService');
        }
        
        return $this->authservice;
    }
	
	/** Get check priviledge module */
	public function getPrivilege()
    {
		if (! $this->privilege) {
        	$this->privilege = $this->getServiceLocator()
									->get('Privilege');
		}
		
        return $this->privilege;
    }
	
	/** Get Service */
	public function getService()
    {
		if (! $this->service) {
        	$this->service = $this->getServiceLocator()
									->get('TableService');
		}
		
        return $this->service;
    }
	
	/**	Get info user logedin */
	public function getUserInfo()
	{
		return $this->getAuthService()->getStorage()->read();
	}
	
	public function listAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }

		/**	ROLE ACCESS VIEW */
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER,  ACCESS_MODULE_3_CONTAINER, VIEW))
			$this->getPrivilege()->forbidden();
		
		//$reader = new Xml();
		//$data = $reader->fromFile(UPLOAD_PATH.'/files/penerimaan/GetSppb_PIB.xml');
		
		$view = new ViewModel(array('sForm' 	=> 'form',
									'sParent'	=> '0',
									'sKode'		=> '11',
									'sMenuAct' 	=> 'SPPBPIB',
									'dashMenu'	=> array(array('url' => '/main', 'name' => 'Home', 'active' => ''),
														 array('url' => '', 'name' => 'DATA SPPB PIB', 'active' => 'active')
														),
									'userinfo' 	=> $this->getUserInfo(),
									)
							 );
		
		$view->setTerminal(true);
		return $view;
		
    }
	
    public function detailAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		/**	ROLE ACCESS EDIT */
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER,  ACCESS_MODULE_3_CONTAINER, EDIT))
			$this->getPrivilege()->forbidden();
		
        $id	= $this->params('id');
		$data['ID_SPPBPIB'] = $id;
        if (!$id) {
			return $this->getPrivilege()->invalidHandler();
			exit();
        }
		
		if (!$this->getTable()->checkID($data)) {
            return $this->getPrivilege()->invalidHandler();
			exit();
        }
		
		$desc = $this->getTable()->getData($data);

		$view = new ViewModel(array('sForm' 	=> 'form',
									'dashMenu'	=> array(array('url' => '/main', 'name' => 'Home', 'active' => ''),
														 array('url' => '/penerimaan/sppbpib', 'name' => 'DATA SPPB PIB', 'active' => ''),
														 array('url' => '', 'name' => 'Detail', 'active' => 'active')
														),
									'userinfo' 	=> $this->getUserInfo(),
									'kode_dok' 	=> $this->getService()->fetchAllKodeDokumen(),
									'desc'		=> $desc,
									)
							 );
							 
		$view->setTerminal(true);
		return $view;
    }
	
	public function saveAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		$data = $this->request->getPost()->toArray();
		if($this->request->getPost('TGL_TIBA') != ''){
			$exp_tgl		= explode('/', $this->request->getPost('TGL_TIBA'));
			if(count($exp_tgl) < 2):
				$data['TGL_TIBA']	= $this->request->getPost('TGL_TIBA');
			else:
				$data['TGL_TIBA']	= $exp_tgl[2].'-'.$exp_tgl[1].'-'.$exp_tgl[0];
			endif;
			
		}else{
			$data['TGL_TIBA']	= '9999-09-09';
		}
		
		$data['IDPERUSAHAAN']	= $this->getUserInfo()->IDPERUSAHAAN;
		$data['ID_SERVICE_TYPE']= 1;
			
		$data['CRBY']			= $this->getUserInfo()->IDUSER;
		$data['MDBY']			= $this->getUserInfo()->IDUSER;
		
		if ($this->request->isPost()){
			$action	= $this->request->getPost('act');
			$json["check_valid"] = 'valid';
			
			if($action == 'add')
			{
				$data['REF_NUMBER']		= $this->getTable()->getLastReff($data);
				$this->getTable()->save($data);
				$json["id"] = $this->getService()->getSecId('COARRICODECO_SEQ', 'tps');
				$json["message_info"] 	= 'Data berhasil di simpan';
			}
			
			if($action == 'edit')
			{	
				$this->getTable()->edit($data);
				$json["message_info"] 	= 'Data berhasil di perbaharui';
			}
        
		}
		
		echo json_encode($json);
		exit();
    }
	
    public function deleteAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		/**	ROLE ACCESS DELETE */
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER,  ACCESS_MODULE_3_CONTAINER, DELETE))
			$this->getPrivilege()->forbidden();
		
		$remove = (int) $this->request->getQuery('remove');
		if ($this->request->isPost() AND $remove)
		{
			$uid = $this->request->getPost('UID');
			for($ii=0; $ii< count($uid); $ii++)
			{
				$id = $uid[$ii];
				$this->getTable()->delete($id);
			}
			
			exit();
		}
		
		$id = $this->params('id');
		if($id AND $remove){
			$this->getTable()->delete($id);
		}
		
		exit();
    }
	
	public function searchAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		$data = $this->request->getPost()->toArray();
		
		$json["check_valid"] = 'valid';
		if ($this->request->isPost())
		{			
			$json["NO_SPPB"] 	= $this->request->getPost('NO_SPPB');
			$json["NPWP_IMP"] 	= $this->request->getPost('NPWP_IMP');
			
			if($this->request->getPost('TGL_SPPB') != ''){
				$exp_tgl = explode('/', $this->request->getPost('TGL_SPPB'));
				if(count($exp_tgl) < 2):
					$json["TGL_SPPB"] 	= $this->request->getPost('TGL_SPPB');
				else:
					$json['TGL_SPPB']	= $exp_tgl[2].'-'.$exp_tgl[1].'-'.$exp_tgl[0];
				endif;
			}else{
				$json['TGL_SPPB']	= "";
			}
			
		}else{
			$json["NO_SPPB"] 	= "";
			$json["TGL_SPPB"] 	= "";
			$json["NPWP_IMP"] 	= "";
			$json["message_info"] = 'Pencarian gagal';
		}
		
		echo json_encode($json);
		exit();
    }
	
	public function jsonAction() 
	{
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		$data['IDPERUSAHAAN'] 	= $this->getUserInfo()->IDPERUSAHAAN;
		$data['NO_SPPB'] 		= $this->request->getQuery('NO_SPPB');
		$data['TGL_SPPB'] 		= $this->request->getQuery('TGL_SPPB');
		$data['NPWP_IMP'] 		= $this->request->getQuery('NPWP_IMP');

		$json		= $this->getTable()->fetchAll($data);
		echo $json;
		exit();
	}
	
    public function getTable()
    {
        if (!$this->sTable) {
            $sm = $this->getServiceLocator();
            $this->sTable = $sm->get('Penerimaan\Model\SppbpibTable');
        }
        return $this->sTable;
    }

}
