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
	
	
class GroupController extends AbstractActionController
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_1_GROUP, VIEW))
			$this->getPrivilege()->forbidden();
		
		$view = new ViewModel(array('sForm' 	=> 'table',
									'sParent'	=> '10',
									'sKode'		=> '10.02',
									'sMenuAct' 	=> 'Group',
									'dashMenu'	=> array(array('url' => '/main',
															   'name' => 'Home',
															   'active' => ''),
														 
														 array('url' => '',
															   'name' => 'Group',
															   'active' => 'active')
														),
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_1_GROUP, ADD))
			$this->getPrivilege()->forbidden();
		
		$data['ISADMIN']		= $this->getUserInfo()->ISADMIN;
		
		$view = new ViewModel(array('sForm' 	=> 'form',
									'dashMenu'	=> array(array('url' => '/main',
															   'name' => 'Home',
															   'active' => ''),
														 
														 array('url' => '/admin/group',
															   'name' => 'Group',
															   'active' => ''),
														 
														 array('url' => '',
															   'name' => 'Add',
															   'active' => 'active')
														),
									'module'	=> $this->getTable()->getModules($data),
									'tabs'		=> $this->getTable()->getParentModules($data),
									'tabmodule'	=> $this->getTable()->getTabsModules($group_id = NULL, $data),
									'ISADMIN'	=> $this->getUserInfo()->ISADMIN,
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_1_GROUP, EDIT))
			$this->getPrivilege()->forbidden();
		
        $id	= (int)$this->params('id');
		$data['IDGROUP']		= $id;
		$data['ISADMIN']		= $this->getUserInfo()->ISADMIN;
		
        if (!$id) {
			return $this->getPrivilege()->invalidHandler();
			exit();
        }
		
		if (!$this->getTable()->checkID($data)) {
            return $this->getPrivilege()->invalidHandler();
			exit();
        }

		$view = new ViewModel(array('sForm' 	=> 'form',
									'dashMenu'	=> array(array('url' => '/main',
															   'name' => 'Home',
															   'active' => ''),
														 
														 array('url' => '/admin/group',
															   'name' => 'Group',
															   'active' => ''),
														 
														 array('url' => '',
															   'name' => 'Edit',
															   'active' => 'active')
														),				
									'module'	=> $this->getTable()->getModules($data),
									'tabs'		=> $this->getTable()->getParentModules($data),
									'tabmodule'	=> $this->getTable()->getTabsModules($data['IDGROUP'], $data),
									'desc'		=> $this->getTable()->getData($data),
									'descRole'	=> $this->getTable()->getDataRole($data),
									'ISADMIN'	=> $this->getUserInfo()->ISADMIN,
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
		
		$data['CRBY']				= $this->getUserInfo()->IDUSER;
		$data['MDBY']				= $this->getUserInfo()->IDUSER;
		
		$data['IDPERUSAHAAN']		= $this->getUserInfo()->IDPERUSAHAAN;
		$data['ISADMIN'] 			= (int) $this->request->getPost('ISADMIN');
		
		if ($this->request->isPost()){
			$action	= $this->request->getPost('act');
			$json["check_valid"] = 'valid';
			
			if($action == 'add'){
				
				if($this->getTable()->checkData($data) > 0){
					$json["check_valid"] 	= 'invalid';
					$json["message_info"] 	= 'Group '.$data['NAMAGROUP'].' sudah terpakai ';
				}else{
					
					$this->getTable()->save($data);
					$group_id = $this->getService()->getSecId('GROUP_SEQ');
					$this->saveRole($group_id);
					
					$json["message_info"] = 'Data berhasil di simpan';
				}
				
			}
			
			if($action == 'edit')
			{	
				$data['CURRENTNAMAGROUP'] = $this->request->getPost('CURRENTNAMAGROUP');
				if($this->getTable()->checkData($data) > 0){
					$json["check_valid"] = 'invalid';
					$json["message_info"] = 'Group '.$data['NAMAGROUP'].' sudah terpakai ';
				}else{
					
					$this->getTable()->edit($data);
					$this->saveRole($data['IDGROUP']);
					$json["message_info"] = 'Data berhasil di perbaharui';
				}
				
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_1_GROUP, DELETE))
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
		
		$data['IDPERUSAHAAN']	= $this->getUserInfo()->IDPERUSAHAAN;
		$data['ISADMIN']		= $this->getUserInfo()->ISADMIN;
		
		$json	= $this->getTable()->fetchAll($data);
		echo $json;
		exit();
	}
	
	public function saveRole($group_id,$action='add')
	{
		$module_id				= $this->request->getPost('IDMODUL');
		$ordinal				= $this->request->getPost('ORDINAL');
		
		for($ii=0; $ii< count($module_id); $ii++)
		{
			$data['IDMODUL']		= $module_id[$ii];
			$data['ORDINAL']		= $ordinal[$ii];
			$data['IDGROUP']		= $group_id;
			$data['ROLEADD']		= (int) $this->request->getPost('ROLEADD_'.$module_id[$ii]);
			$data['ROLEVIEW']		= (int) $this->request->getPost('ROLEVIEW_'.$module_id[$ii]);
			$data['ROLEEDIT']		= (int) $this->request->getPost('ROLEEDIT_'.$module_id[$ii]);
			$data['ROLEDEL']		= (int) $this->request->getPost('ROLEDEL_'.$module_id[$ii]);
			$data['ROLERIP']		= (int) $this->request->getPost('ROLERIP_'.$module_id[$ii]);
			$data['CRBY']			= $this->getUserInfo()->IDUSER;
			$data['MDBY']			= $this->getUserInfo()->IDUSER;	
						  
			($action == 'add' ? $this->getTable()->saveRole($data) : $this->getTable()->updateRole($data));
		}
		
	}
	
	public function checkAction()
	{
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		if($this->request->getQuery('CURRENTNAMAGROUP')){
			$data['CURRENTNAMAGROUP'] = $this->request->getQuery('CURRENTNAMAGROUP');
		}
		
		$data['NAMAGROUP']	= $this->request->getQuery('NAMAGROUP');
		$valid				= 'true';
		
		if($this->getTable()->checkData($data) > 0){
			$valid 			= 'false';
		}
		
		echo $valid;
		exit();
	}

    public function getTable()
    {
        if (!$this->sTable) {
            $sm = $this->getServiceLocator();
            $this->sTable = $sm->get('Admin\Model\GroupTable');
        }
        return $this->sTable;
    }

}
