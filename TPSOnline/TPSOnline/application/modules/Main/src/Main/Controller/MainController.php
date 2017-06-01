<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     MainModule
 */

namespace Main\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Http\Client as HttpClient;
use Service\Model\CustomCache;

class MainController extends AbstractActionController
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
		
		$data['IDUSER']		= $this->getUserInfo()->IDUSER;
		$data['IDGROUP']	= $this->getUserInfo()->IDGROUP;
		
		/** Begin Setup the Cache */
		$cache = new CustomCache(array( 'name'      => 'dbcachemenu',
      									'path'      => DATA_DIR.'tmp/cache/',
      									'extension' => '.cache'));
		/** End Setup the Cache*/
		
		$cache->store('menu',$this->getService()->getMenu($data));
		$restMenu = $cache->retrieve('menu');
		
		$view = new ViewModel(array('sForm' 	=> 'main',
									'sParent'	=> '0',
									'sKode'		=> '09',
									'sMenu'		=> $restMenu,
									'sMenuAct' 	=> 'main',
									'dashMenu'	=> array(array('url' => '/main', 'name' => 'Home', 'active' => 'active')
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
            $this->sTable = $sm->get('Main\Model\MainTable');
        }
        return $this->sTable;
    }
	
}
