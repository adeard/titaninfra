<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     DokumenModule
 */

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
	
class TargetController extends AbstractActionController
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_1_TARGET, VIEW))
			$this->getPrivilege()->forbidden();
		
		$data['IDTARGET']	= 1;
		
        if (!$data['IDTARGET']) {
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
									'sMenuAct' 	=> 'Target',
									'dashMenu'	=> array(array('url' => '/main',
															   'name' => 'Home',
															   'active' => ''),
														 
														 array('url' => '',
															   'name' => 'Target',
															   'active' => 'active')
														),
									
									'desc'		=> $desc,
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
				$data['IDTARGET'] 	= $this->request->getPost('IDTARGET');
				$this->getTable()->edit($data);
				$json["message_info"] = 'Data berhasil di perbaharui';
			}
        
		}
		
		echo json_encode($json);
		exit();
	}
	
    public function getTable()
    {
        if (!$this->sTable) {
            $sm = $this->getServiceLocator();
            $this->sTable = $sm->get('Admin\Model\TargetTable');
        }
        return $this->sTable;
    }

}
