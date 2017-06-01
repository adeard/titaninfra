<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     AdminModule
 */

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
	
	
class PerusahaanController extends AbstractActionController
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_1_PERUSAHAAN, VIEW))
			$this->getPrivilege()->forbidden();
		
		$data['IDPERUSAHAAN']	= $this->getUserInfo()->IDPERUSAHAAN;
		
        if (!$data['IDPERUSAHAAN']) {
			return $this->getPrivilege()->invalidHandler();
			exit();
        }
		
		if (!$this->getTable()->checkID($data)) {
            return $this->getPrivilege()->invalidHandler();
			exit();
        }
		
		$desc = $this->getTable()->getData($data);
	
		$view = new ViewModel(array('sForm' 	=> 'form',
									'sParent'	=> '0',
									'sKode'		=> '12',
									'sMenuAct' 	=> 'Perusahaan',
									'dashMenu'	=> array(array('url' => '/main',
															   'name' => 'Home',
															   'active' => ''),
														 
														 array('url' => '',
															   'name' => 'Perusahaan',
															   'active' => 'active')
														),
									'provinsi'	=> $this->getService()->fetchAllProvinsi(),
									'desc'		=> $desc,
									'userinfo' 	=> $this->getUserInfo(),
									)
							 );
		
		$view->setTerminal(true);
		return $view;
		
    }
	
	public function addAction()
    {
        /**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		/**	ROLE ACCESS ADD */
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_1_PERUSAHAAN, ADD))
			$this->getPrivilege()->forbidden();
				
		$view = new ViewModel(array('sForm' 	=> 'form',
									'provinsi'	=> $this->getService()->fetchAllProvinsi(),
									'PARENT' 	=> $this->getUserInfo()->IDPERUSAHAAN,
									'userinfo' 	=> $this->getUserInfo(),
									)
							 );
		
		$view->setTerminal(true);
		return $view;
    }

    public function editAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		/**	ROLE ACCESS EDIT */
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_1_PERUSAHAAN, EDIT))
			$this->getPrivilege()->forbidden();
		
        $id	= (int)$this->params('id');
		$data['IDPERUSAHAAN']	= $id;
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
									'provinsi'	=> $this->getService()->fetchAllProvinsi(),
									'desc'		=> $desc,
									'PARENT' 	=> $this->getUserInfo()->IDPERUSAHAAN,
									'userinfo' 	=> $this->getUserInfo(),
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
		if($this->request->getPost('TGLMULAI') != ''){
			$exp_tgl_mulai		= explode('/', $this->request->getPost('TGLMULAI'));
			$data['TGLMULAI']	= $exp_tgl_mulai[2].'-'.$exp_tgl_mulai[1].'-'.$exp_tgl_mulai[0];
		}else{
			$data['TGLMULAI']	= '9999-09-09';
		}
		
		$data['CRBY']	= $this->getUserInfo()->IDUSER;
		$data['MDBY']	= $this->getUserInfo()->IDUSER;
		
		if ($this->request->isPost()){
			$action	= $this->request->getPost('act');
			$json["check_valid"] = 'valid';
			
			if($action == 'add')
			{	
				$this->getTable()->save($data);
				$json["message_info"] = 'Data berhasil di simpan';
			}
			
			if($action == 'edit')
			{	
				$data['IDPERUSAHAAN'] 	= $this->request->getPost('IDPERUSAHAAN');
				$this->getTable()->edit($data);
				$json["message_info"] = 'Data berhasil di perbaharui';
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_1_PERUSAHAAN, DELETE))
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
	
	public function jsonAction() 
	{
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		$PARENT = $this->getUserInfo()->IDPERUSAHAAN;
		$json	= $this->getTable()->fetchAll($PARENT);
		echo $json;
		exit();
	}

    public function getTable()
    {
        if (!$this->sTable) {
            $sm = $this->getServiceLocator();
            $this->sTable = $sm->get('Admin\Model\PerusahaanTable');
        }
        return $this->sTable;
    }

}
