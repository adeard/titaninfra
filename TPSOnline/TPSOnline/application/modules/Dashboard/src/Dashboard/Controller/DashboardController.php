<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     DashboardModule
 */

namespace Dashboard\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Http\Client as HttpClient;
use Zend\Http\Client\Adapter\Curl;

class DashboardController extends AbstractActionController
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
	
    public function indexAction()
    {
		
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		$adapter	= new Curl();
		$client 	= new HttpClient();
		$client->setAdapter($adapter);
		$client->setUri('http://api.development.id/jurnal/akun');
		
        $adapter->setOptions(array('curloptions' => 
			array(CURLOPT_HTTPAUTH => CURLAUTH_ANY,
				  CURLOPT_USERPWD => "admin:admin",
				  CURLOPT_RETURNTRANSFER => 1,
			)
		));

		$client->setMethod('GET');
        $response = $client->send();		
		
        if (!$response->isSuccess()) {
            $message = $response->getStatusCode() . ': ' . $response->getReasonPhrase();
            $response = $this->getResponse();
            $response->setContent($message);
            return $response;
        }
		
        $body = $response->getBody();
        $response = $this->getResponse();
        $response->setContent($body);
		var_dump($response);
		exit();
		
		$view = new ViewModel(array('sForm' 	=> 'dashboard',
									'sParent'	=> '0',
									'sKode'		=> '10',
									'sMenu'		=> $this->getService()->getMenu(),
									'sMenuAct' 	=> 'dashboard',
									'dashMenu'	=> array(array('url' => '/dashboard', 'name' => 'Home', 'active' => ''),
														 array('url' => '', 'name' => 'Dashboard', 'active' => 'active')
														),
									'userinfo' 	=> $this->getUserInfo(),
									'imgheader'	=> $this->getTable()->fetchAll(),)
							 );
		return $view;
		
    }
	
    public function getTable()
    {
        if (!$this->sTable) {
            $sm = $this->getServiceLocator();
            $this->sTable = $sm->get('Dashboard\Model\DashboardTable');
        }
        return $this->sTable;
    }
	
}
