<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     AdminModule
 */

namespace Admin\Media\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Service\Controller\UploadController;
	
class ImageController extends AbstractActionController
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_1_IMAGE, VIEW))
			$this->getPrivilege()->forbidden();
		
		$view = new ViewModel(array('sForm' 	=> 'table',
									'sParent'	=> '0',
									'sKode'		=> '11',
									'sMenuAct' 	=> 'Images',
									'dashMenu'	=> array(array('url' => '/main', 'name' => 'Home', 'active' => ''),
														 array('url' => '', 'name' => 'Gate In Container', 'active' => 'active')
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_1_IMAGE, ADD))
			$this->getPrivilege()->forbidden();
				
		$view = new ViewModel(array('sForm' 	=> 'form',
									'dashMenu'	=> array(array('url' => '/main', 'name' => 'Home', 'active' => ''),
														 array('url' => '/admin/image', 'name' => 'Image', 'active' => ''),
														 array('url' => '', 'name' => 'Add', 'active' => 'active')
														),
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_1_IMAGE, EDIT))
			$this->getPrivilege()->forbidden();
		
        $id	= $this->params('id');
		$data['IDIMAGE'] = $id;
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
														 array('url' => '/admin/image', 'name' => 'Image', 'active' => ''),
														 array('url' => '', 'name' => 'Edit', 'active' => 'active')
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
		$data['USERFILES']		= ($this->request->getPost('USERFILES') != '' ?
								   $this->request->getPost('USERFILES') : 
								   $this->request->getPost('USERFILESOLD'));
		
		$data['IDPERUSAHAAN']	= $this->getUserInfo()->IDPERUSAHAAN;
		$data['CRBY']			= $this->getUserInfo()->IDUSER;
		$data['MDBY']			= $this->getUserInfo()->IDUSER;
		
		/** BEGIN UPLOAD IMAGE */
		if($this->request->getPost('USERFILES') != ''):
			$upload = new UploadController();
			
			$upload_dir = UPLOAD_PATH.'/uploads/';
			if (!is_dir($upload_dir.'/userfiles/'.$this->getUserInfo()->IDPERUSAHAAN.'/header/thumbnail')) {
				mkdir($upload_dir.'/userfiles/'.$this->getUserInfo()->IDPERUSAHAAN.'/header/thumbnail', 0755, true);
			}
			
			$source_files	= $upload_dir.'temp/'.$data['USERFILES'];
			$target_files	= $upload_dir.'userfiles/'.$this->getUserInfo()->IDPERUSAHAAN.'/header/'.$data['USERFILES'];
			if($upload->moveimage($source_files, $target_files)):
				$source_thumb	= $upload_dir.'temp/thumbnail/'.$data['USERFILES'];
				$target_thumb	= $upload_dir.'userfiles/'.$this->getUserInfo()->IDPERUSAHAAN.'/header/thumbnail/'.$data['USERFILES'];
				$upload->moveimage($source_thumb, $target_thumb);
			endif;
			
		endif;
		/** END UPLOAD IMAGE */
		
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
		if(!$this->getPrivilege()->check($this->getUserInfo()->IDUSER, ACCESS_MODULE_1_IMAGE, DELETE))
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
		
		$json		= $this->getTable()->fetchAll();
		echo $json;
		exit();
	}
	
    public function getTable()
    {
        if (!$this->sTable) {
            $sm = $this->getServiceLocator();
            $this->sTable = $sm->get('Admin\Media\Model\ImageTable');
        }
        return $this->sTable;
    }

}
