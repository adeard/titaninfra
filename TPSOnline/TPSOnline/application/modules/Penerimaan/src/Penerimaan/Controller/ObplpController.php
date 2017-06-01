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
	
class ObplpController extends AbstractActionController
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER,  ACCESS_MODULE_2_PLP, VIEW))
			$this->getPrivilege()->forbidden();
		
		//$reader = new Xml();
		//$data = $reader->fromFile(UPLOAD_PATH.'/files/penerimaan/GetSppb_PIB.xml');
		
		$view = new ViewModel(array('sForm' 	=> 'form',
									'sParent'	=> '0',
									'sKode'		=> '11',
									'sMenuAct' 	=> 'PendukungPLP',
									'dashMenu'	=> array(array('url' => '/main', 'name' => 'Home', 'active' => ''),
														 array('url' => '', 'name' => 'OB/PLP (Pindah TPS)', 'active' => 'active')
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER,  ACCESS_MODULE_2_PLP, EDIT))
			$this->getPrivilege()->forbidden();
		
        $id	= $this->params('id');
		$data['ID_OB'] = $id;
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
														 array('url' => '/penerimaan/obplp', 'name' => 'OB/PLP (Pindah TPS)', 'active' => ''),
														 array('url' => '', 'name' => 'Detail', 'active' => 'active')
														),
									'userinfo' 	=> $this->getUserInfo(),
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
		exit();
    }
	
    public function deleteAction()
    {
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		/**	ROLE ACCESS DELETE */
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER,  ACCESS_MODULE_2_PLP, DELETE))
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
		
		$data['IDPERUSAHAAN'] 	= $this->getUserInfo()->IDPERUSAHAAN;

		$json		= $this->getTable()->fetchAll($data);
		echo $json;
		exit();
	}
	
    public function getTable()
    {
        if (!$this->sTable) {
            $sm = $this->getServiceLocator();
            $this->sTable = $sm->get('Penerimaan\Model\ObplpTable');
        }
        return $this->sTable;
    }

}
