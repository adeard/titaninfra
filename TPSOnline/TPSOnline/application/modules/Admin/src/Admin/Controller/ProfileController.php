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

use Zend\Crypt\BlockCipher,
	Zend\Crypt\Symmetric\Mcrypt,
	Zend\Crypt\Key\Derivation\Pbkdf2,
	Zend\Math\Rand;

use Service\Controller\UploadController;

	
class ProfileController extends AbstractActionController
{
    protected $sTable;
	protected $authservice;
	protected $privilege;
	protected $service;
	
	public function __construct()
    {
        $this->request	= $this->getRequest();
		
		/** encrypt */
		$this->cipher	= BlockCipher::factory('mcrypt', array('algo' => 'aes'));
		$this->cipher->setKey('encryption key');
		
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
		
		$id	= $this->getUserInfo()->IDUSER;
		$data['IDUSER']	= $id;
		if (!$id) {
            return $this->getPrivilege()->invalidHandler();
			exit();
        }
		
		if (!$this->getTable()->checkID($data)) {
            return $this->getPrivilege()->invalidHandler();
			exit();
        }
		
		$desc = $this->getTable()->getData($data);
		if($desc->SECRETKEY != "")
		{
			$password = $this->cipher->decrypt($desc->SECRETKEY);
		}else{
			$password = "";
		}
		
		$view = new ViewModel(array('sForm' 	=> 'form',
									'sParent'	=> '0',
									'sKode'		=> '10',
									'sMenuAct' 	=> 'User',
									'dashMenu'	=> array(array('url' => '/main', 'name' => 'Home', 'active' => ''),
														 array('url' => '/admin/user', 'name' => 'User', 'active' => ''),
														 array('url' => '', 'name' => 'Profile', 'active' => 'active')
														),
									'userinfo' 	=> $this->getUserInfo(),
									'desc'		=> $desc,
									'password'	=> $password,
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
		
		$Identitas = $this->getServiceLocator()->get('Admin\Model\IdentitasTable');
		$data = $this->request->getPost()->toArray();
		$data['USERFILES']		= ($this->request->getPost('USERFILES') != '' ?
								   $this->request->getPost('USERFILES') : 
								   $this->request->getPost('USERFILESOLD'));
								   
		if($this->request->getPost('TGLLAHIR') != ''){
			$exp_tgl_lahir		= explode('/', $this->request->getPost('TGLLAHIR'));
			$data['TGLLAHIR']	= $exp_tgl_lahir[2].'-'.$exp_tgl_lahir[1].'-'.$exp_tgl_lahir[0];
		}else{
			$data['TGLLAHIR']	= '9999-09-09';
		}
		
		$data['SECRETKEY']	= $this->cipher->encrypt($this->request->getPost('PASSWORD1'));
		$data['PASSWORD'] 	= $this->request->getPost('PASSWORD1');
		$data['CRBY']		= $this->getUserInfo()->IDUSER;
		$data['MDBY']		= $this->getUserInfo()->IDUSER;
		
		/** token_id */
		$salt 				= Rand::getBytes(32, true);
		$key  				= Pbkdf2::calc('sha256', $data['PASSWORD'], $salt, 10000, 10);
		$data['TOKENID']	= bin2hex($key);
		
		/** BEGIN UPLOAD IMAGE */
		if($this->request->getPost('USERFILES') != ''):
			$upload = new UploadController();
			
			$upload_dir = UPLOAD_PATH.'/uploads/';
			if (!is_dir($upload_dir.'/userfiles/'.$this->getUserInfo()->IDPERUSAHAAN.'/account')) {
				mkdir($upload_dir.'/userfiles/'.$this->getUserInfo()->IDPERUSAHAAN.'/account', 0755, true);
			}
			
			if($this->request->getPost('act') == 'edit'):	
				$dst_name	= $this->request->getPost('IDUSER');
			else:
				$dst_name	= $this->getTable()->getLastUserId();
			endif;
			
			$new_files	= $dst_name.'.'.pathinfo($upload_dir.'temp/'.$data['USERFILES'], PATHINFO_EXTENSION);
			rename($upload_dir.'temp/'.$data['USERFILES'], $upload_dir.'temp/'.$new_files);
			$source_files	= $upload_dir.'temp/'.$new_files;
			$pinfo 			= pathinfo($source_files);
			$target_files	= $upload_dir.'userfiles/'.$this->getUserInfo()->IDPERUSAHAAN.'/account/'.$pinfo['filename'].'.'.$pinfo['extension'];
			$upload->moveimage($source_files, $target_files);
			
			$data['USERFILES'] = $new_files;
			
		endif;
		/** END UPLOAD IMAGE */
		
		if ($this->request->isPost()){
			$action	= $this->request->getPost('act');
			$json["check_valid"] = 'valid';
			
			if($action == 'edit')
			{
				$this->getTable()->connection->beginTransaction();
				try 
				{
					$this->getTable()->edit($data);
					$Identitas->edit($data);
					
					$this->getTable()->connection->commit();
					$this->getAuthService()->clearIdentity();
				} catch (Exception $e) {
					$this->getTable()->connection->rollback();
				}	

				$json["message_info"] 	= 'Data berhasil di perbaharui';
			}
        
		}
		
		echo json_encode($json);
		exit();
    }
	
    public function getTable()
    {
        if (!$this->sTable) {
            $sm = $this->getServiceLocator();
            $this->sTable = $sm->get('Admin\Model\ProfileTable');
        }
        return $this->sTable;
    }
}
