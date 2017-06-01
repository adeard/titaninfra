<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     AuthModule
 */

namespace Auth\Controller;

use Zend\Mvc\Controller\AbstractActionController,
	Zend\View\Model\ViewModel,
	Zend\Log\Writer\Stream,
	Zend\Log\Logger;

use Zend\Session\Container;

class AuthController extends AbstractActionController
{
    protected $sTable;
	protected $storage;
    protected $authservice;
	protected $auth;
	
	public function __construct()
    {
        $this->request	= $this->getRequest();
		
		/** Logs */
		$logsFiles		= date("Y_m_d").'_auth.txt';
		$this->rmkdir(LOGS_DIR.'access/'.date("Y").'/'.date("m").'/'.date("d"));
		$this->writer 	= new Stream(LOGS_DIR.'access/'.date("Y").'/'.date("m").'/'.date("d").'/'.$logsFiles);
		$this->logger 	= new Logger();
		$this->logger->addWriter($this->writer);
		
    }
	
	public function getAuthService()
    {
        if (! $this->authservice) {
            $this->authservice = $this->getServiceLocator()
                                      ->get('AuthService');
        }
        
        return $this->authservice;
    }
    
    public function getSessionStorage()
    {
        if (! $this->storage) {
            $this->storage = $this->getServiceLocator()
                                  ->get('Auth\Model\AuthStorage');
        }
        
        return $this->storage;
    }
	
	public function loginAction()
    {
		
		if ($this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('main');
        }
		
        $view	= new ViewModel(array('error' => (int)$this->params('id') ));
		//$view->setVariable('error', 'Login Error');
		
		$view->setTerminal(true);
		return $view;
    }
	
	public function registerAction()
    {
		
		if ($this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('');
        }
		
        $view	= new ViewModel(array('error' => (int)$this->params('id') ));
		//$view->setVariable('error', 'Login Error');
		
		$view->setTerminal(true);
		return $view;
    }
	
	public function authenticateAction()
    {
		
        $redirect = 'auth';
		$json["check_valid"] = 'valid';
		
        if ($this->request->isPost()){
			
			if($this->request->getPost('USERNAME') == '' ||
			   $this->request->getPost('PASSWORD') == ''){
				return $this->redirect()->toRoute($redirect);
				exit();
			}
			//check authentication...
			$this->getAuthService()->getAdapter()
								   ->setIdentity($this->request->getPost('USERNAME'))
								   ->setCredential($this->request->getPost('PASSWORD'));
								   
			$result = $this->getAuthService()->authenticate();
			
			if ($result->isValid()) {
				$redirect = 'main';
				
				//check if it has rememberMe :
				if ($this->request->getPost('rememberme') == 1 ) {
					$this->getSessionStorage()
						 ->setRememberMe(1);
						 
					//set storage again
					$this->getAuthService()->setStorage($this->getSessionStorage());
				}
				
				$data		= $this->getAuthService()->getAdapter()->getResultRowObject(null, 'PASSWORD');
				$identity	= $this->getTable()->getData($data);
				
				if($identity['STATUS'] == 'A' AND $identity['FLAGS'] == 0)
				{
					$this->getAuthService()->setStorage($this->getSessionStorage());
					//$this->getAuthService()->getStorage()->write($request->getPost('USERNAME'));
					$this->getAuthService()->getStorage()->write($data);
					$this->getAuthService()->getStorage()->write($identity);
					
					$this->logger->info($this->request->getPost('USERNAME').' -- '.
										$_SERVER['REMOTE_ADDR'].' -- '.
										$_SERVER['HTTP_USER_AGENT'].' -- '.
										$_SERVER['REMOTE_PORT'].' -- '.
										$_SERVER['REQUEST_METHOD'].' -- '.
										$_SERVER['REQUEST_URI'].' -- '.
										$this->getAuthService()->getStorage()->read()->SECRETKEY.' -- '.
										'login'. ' -- '.
										'success');
					
					/**
					$logs = array('user_id' 	=> $this->getAuthService()->getStorage()->read()->user_id, 
								  'USERNAME'	=> $this->getAuthService()->getStorage()->read()->USERNAME, 
								  'secretkey' 	=> $this->getAuthService()->getStorage()->read()->secretkey,
								  'status' 		=> 'login',
								  'note' 		=> '');
					*/
					// Write logs on database
					//$this->getTable()->logs($logs);
					
					$user_session = new Container('USER');
					$user_session->getCacheId 	= $this->getAuthService()->getStorage()->read()->IDUSER;
					$user_session->IDPERUSAHAAN = $this->getAuthService()->getStorage()->read()->IDPERUSAHAAN;
					$user_session->USERNAME 	= $this->getAuthService()->getStorage()->read()->USERNAME;
					$user_session->NAMADEPAN 	= $this->getAuthService()->getStorage()->read()->NAMADEPAN;
					$user_session->NAMABELAKANG = $this->getAuthService()->getStorage()->read()->NAMABELAKANG;
					$user_session->USERFILES 	= $this->getAuthService()->getStorage()->read()->USERFILES;
					
					$json["message_info"] = $redirect;
					echo json_encode($json);
					exit();
				}else{
					$this->logger->info($this->request->getPost('USERNAME').' -- '.
										$_SERVER['REMOTE_ADDR'].' -- '.
										'login'. ' -- '.
										'fail');
					
					$json["check_valid"] = 'invalid';
					$json["message_info"] = 'User yang anda gunakan belum teraktivasi';
					echo json_encode($json);
					exit();
				}
				
			}else{
			
				$this->logger->info($this->request->getPost('USERNAME').' -- '.
									$_SERVER['REMOTE_ADDR'].' -- '.
									'login'. ' -- '.
									'fail');
				
				$json["check_valid"] = 'invalid';
				$json["message_info"] = 'Silahkan cek kembali username atau password anda';
				echo json_encode($json);
				//return $this->redirect()->toRoute('auth', array('action' => 'index', 'id' => '404'));
				exit();
			} 
 
        }
        
        return $this->redirect()->toRoute($redirect);
    }
    
    public function logoutAction()
    {
        if ($this->getAuthService()->hasIdentity()) {
            $this->getSessionStorage()->forgetMe();
			
			$this->logger->info($this->getAuthService()->getStorage()->read()->USERNAME.' -- '.
								$_SERVER['REMOTE_ADDR'].' -- '.
								'logout'. ' -- '.
								'success');
			
			$this->getTable()->logout($this->getAuthService()->getStorage()->read()->IDUSER);
			
            $this->getAuthService()->clearIdentity();
			$user_session = new Container('USER');
			$user_session->getManager()->getStorage()->clear();
			
        }
        
        return $this->redirect()->toRoute('auth');
    }
    
	public function lockAction()
	{
		$container = new Container("USER");
		$view	= new ViewModel(array('IDUSER' 		=> $container->getCacheId,
									  'IDPERUSAHAAN'=> $container->IDPERUSAHAAN,
									  'USERNAME' 	=> $container->USERNAME,
									  'NAMADEPAN' 	=> $container->NAMADEPAN,
									  'NAMABELAKANG'=> $container->NAMABELAKANG,
									  'USERFILES'	=> $container->USERFILES));
		
		$this->getTable()->idle($this->getAuthService()->getStorage()->read()->IDUSER);
		$this->getAuthService()->clearIdentity();
		
		if(!$container->USERNAME)
		{
			return $this->redirect()->toRoute('main');
		}

		$view->setTerminal(true);
		return $view;
	}
	
	public function rmkdir($path, $mode = 0755) {

		$path = rtrim(preg_replace(array("/\\\\/", "/\/{2,}/"), "/", $path), "/");
		$e = explode("/", ltrim($path, "/"));
		if(substr($path, 0, 1) == "/") {
			$e[0] = "/".$e[0];
		}

		$c = count($e);
		$cp = $e[0];
		for($i = 1; $i < $c; $i++) {
			if(!is_dir($cp) && !@mkdir($cp, $mode)) {
				return false;
			}
			$cp .= "/".$e[$i];
		}
		return @mkdir($path, $mode);
	}
	
    public function getTable()
    {
        if (!$this->sTable) {
            $sm = $this->getServiceLocator();
            $this->sTable = $sm->get('Auth\Model\AuthTable');
        }
        return $this->sTable;
    }
}
