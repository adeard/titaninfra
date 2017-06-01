<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     ServiceModule
 */

namespace Service\Controller;

use Zend\Mvc\Controller\AbstractActionController,
	Zend\View\Model\ViewModel,
	Zend\Session\Container;

	
class ServiceController extends AbstractActionController
{
    protected $sTable;
	protected $authservice;
	protected $privilege;
	
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
		
		exit();
    }
	
	public function getKotaAction() 
	{
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		$data['IDPROVINSI'] = $this->request->getQuery('IDPROVINSI');
		$json		= $this->getTable()->fetchAllKota($data);
		echo json_encode($json);
		exit();
	}
	
	public function jsoncontAction() 
	{
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		$data['IDPERUSAHAAN'] 	= $this->getUserInfo()->IDPERUSAHAAN;
		$data['REFF'] 			= $this->request->getQuery('REFF');
		
		if($data['REFF'] == 'SPPBPIB'):
			$data['ID_SPPBPIB'] = $this->request->getQuery('ID');
		endif;
		
		if($data['REFF'] == 'NPE'):
			$data['ID_NPE'] = $this->request->getQuery('ID');
		endif;
		
		if($data['REFF'] == 'SPPBBC12'):
			$data['ID_SPPBBC12'] = $this->request->getQuery('ID');
		endif;
		
		if($data['REFF'] == 'SPPBBC23'):
			$data['ID_SPPBBC23'] = $this->request->getQuery('ID');
		endif;

		$json		= $this->getTable()->fetchAllCont($data);
		echo $json;
		exit();
	}
	
	public function jsonkmsAction() 
	{
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		$data['IDPERUSAHAAN'] 	= $this->getUserInfo()->IDPERUSAHAAN;
		$data['REFF'] 			= $this->request->getQuery('REFF');
		
		if($data['REFF'] == 'SPPBPIB'):
			$data['ID_SPPBPIB'] = $this->request->getQuery('ID');
		endif;
		
		if($data['REFF'] == 'NPE'):
			$data['ID_NPE'] = $this->request->getQuery('ID');
		endif;
		
		if($data['REFF'] == 'SPPBBC12'):
			$data['ID_SPPBBC12'] = $this->request->getQuery('ID');
		endif;
		
		if($data['REFF'] == 'SPPBBC23'):
			$data['ID_SPPBBC23'] = $this->request->getQuery('ID');
		endif;

		$json		= $this->getTable()->fetchAllKms($data);
		echo $json;
		exit();
	}
	
	public function jsonposAction()
	{
		/**	Authentivication user login */
		if (!$this->getAuthService()->hasIdentity()){
            return $this->redirect()->toRoute('auth');
        }
		
		$data['ID_PENDUKUNGPLP']= $this->request->getQuery('ID');

		$json		= $this->getTable()->fetchAllPos($data);
		echo $json;
		exit();
	}
	
	
	public function checkexpiredloginAction()
	{
		$json = array("status" => (int) $this->getAuthService()->hasIdentity());
		echo json_encode($json);
		exit();
	}
	
	
	public function settimerAction()
	{
		$isAuth = true;
		if (!$this->getAuthService()->hasIdentity()){
			$isAuth = false;
        }
		
		$container = new Container("USER");
		$IDUSER = $container->getCacheId;

		$this->getTable()->updateTimerUser($IDUSER);
		
		$json = array("isAuth" => $isAuth);
		echo json_encode($json);
		exit();
	}
	
	
    public function getTable()
    {
        if (!$this->sTable) {
            $sm = $this->getServiceLocator();
            $this->sTable = $sm->get('Service\Model\ServiceTable');
        }
        return $this->sTable;
    }
}
