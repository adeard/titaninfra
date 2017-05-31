<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     PengirimanModule
 */

namespace Pengiriman\Terminal\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
	
class TerminaldetailController extends AbstractActionController
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER,  ACCESS_MODULE_3_TERMINAL, VIEW))
			$this->getPrivilege()->forbidden();
		
		$view = new ViewModel(array('sForm' 	=> 'form',
									'sParent'	=> '0',
									'sKode'		=> '12',
									'sMenuAct' 	=> 'Terminal',
									'dashMenu'	=> array(array('url' => '/main', 'name' => 'Home', 'active' => ''),
														 array('url' => '/pengiriman/terminal', 'name' => 'Coarri-Codeco Car Terminal', 'active' => ''),
														 array('url' => '', 'name' => 'Detail', 'active' => 'active')
														),
									'userinfo' 	=> $this->getUserInfo(),
									'ID_COARRICODECO'=> $this->request->getQuery('ID_COARRICODECO'),
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_3_TERMINAL, ADD))
			$this->getPrivilege()->forbidden();
		
		$data['ID_COARRICODECO'] = $this->request->getQuery('ID_COARRICODECO');
		$TerminalTable = $this->getServiceLocator()->get('Pengiriman\Terminal\Model\TerminalTable');
		
		$desc = $TerminalTable->getData($data);
		
		$view = new ViewModel(array('sForm' 	=> 'form',
									'dashMenu'	=> array(array('url' => '/main', 'name' => 'Home', 'active' => ''),
														 array('url' => '/pengiriman/terminal', 'name' => 'Coarri-Codeco Car Terminal', 'active' => ''),
														 array('url' => '/pengiriman/terminal/edit/'.$desc['ID_COARRICODECO'], 'name' => 'Detail', 'active' => ''),
														 array('url' => '', 'name' => 'Add', 'active' => 'active')
														),
									'userinfo' 	=> $this->getUserInfo(),
									'dokinout' 	=> $this->getService()->fetchAllKodeDokInOut(),
									'sar_angkut'=> $this->getService()->fetchAllSarAngkut(),
									'desc'		=> $desc,
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER,  ACCESS_MODULE_3_TERMINAL, EDIT))
			$this->getPrivilege()->forbidden();
		
        $id	= $this->params('id');
		$data['ID_DET_COARRICODECO'] = $id;
		
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
														 array('url' => '/pengiriman/terminal', 'name' => 'Coarri-Codeco Car Terminal', 'active' => ''),
														 array('url' => '/pengiriman/terminal/edit/'.$desc['ID_COARRICODECO'], 'name' => 'Detail', 'active' => ''),
														 array('url' => '', 'name' => 'Edit', 'active' => 'active')
														),
									'userinfo' 	=> $this->getUserInfo(),
									'dokinout' 	=> $this->getService()->fetchAllKodeDokInOut(),
									'sar_angkut'=> $this->getService()->fetchAllSarAngkut(),
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
		if($this->request->getPost('TGL_BL_AWB') != ''){
			$exp_tgl1		= explode('/', $this->request->getPost('TGL_BL_AWB'));
			if(count($exp_tgl1) < 2):
				$data['TGL_BL_AWB']	= $this->request->getPost('TGL_BL_AWB');
			else:
				$data['TGL_BL_AWB']	= $exp_tgl1[2].'-'.$exp_tgl1[1].'-'.$exp_tgl1[0];
			endif;
			
		}else{
			$data['TGL_BL_AWB']	= '9999-09-09';
		}
		
		if($this->request->getPost('TGL_BC11') != ''){
			$exp_tgl3		= explode('/', $this->request->getPost('TGL_BC11'));
			if(count($exp_tgl3) < 2):
				$data['TGL_BC11']	= $this->request->getPost('TGL_BC11');
			else:
				$data['TGL_BC11']	= $exp_tgl3[2].'-'.$exp_tgl3[1].'-'.$exp_tgl3[0];
			endif;
			
		}else{
			$data['TGL_BC11']	= '9999-09-09';
		}
		
		if($this->request->getPost('TGL_DOK_INOUT') != ''){
			$exp_tgl4		= explode('/', $this->request->getPost('TGL_DOK_INOUT'));
			if(count($exp_tgl4) < 2):
				$data['TGL_DOK_INOUT']	= $this->request->getPost('TGL_DOK_INOUT');
			else:
				$data['TGL_DOK_INOUT']	= $exp_tgl4[2].'-'.$exp_tgl4[1].'-'.$exp_tgl4[0];
			endif;
			
		}else{
			$data['TGL_DOK_INOUT']	= '9999-09-09';
		}
		
		
		$data['CRBY']			= $this->getUserInfo()->IDUSER;
		$data['MDBY']			= $this->getUserInfo()->IDUSER;
		
		if ($this->request->isPost()){
			$action	= $this->request->getPost('act');
			$json["check_valid"] = 'valid';
			
			if($action == 'add')
			{
				$this->getTable()->save($data);
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER,  ACCESS_MODULE_3_TERMINAL, DELETE))
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
		
		$data['ID_COARRICODECO'] = $this->request->getQuery('ID_COARRICODECO');
		$json	= $this->getTable()->fetchAll($data);
		echo $json;
		exit();
	}
	
    public function getTable()
    {
        if (!$this->sTable) {
            $sm = $this->getServiceLocator();
            $this->sTable = $sm->get('Pengiriman\Terminal\Model\TerminaldetailTable');
        }
        return $this->sTable;
    }

}
