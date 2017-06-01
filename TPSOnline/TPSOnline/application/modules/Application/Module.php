<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     ApplicationModule
 */

namespace Application;

use Zend\Mvc\ModuleRouteListener,
	Zend\Mvc\MvcEvent;

use Service\Model\ServiceTable;
use Zend\Db\Adapter\Adapter;
use Service\Model\CustomCache;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
		$session = $e->getApplication()->getServiceManager()->get('session');
        if (isset($session->lang)) {
            $translator = $e->getApplication()->getServiceManager()->get('translator');
            $translator->setLocale($session->lang);

            $viewModel = $e->getViewModel();
            $viewModel->lang = str_replace('_', '-', $session->lang);
        }
		
        $eventManager = $e->getApplication()->getEventManager();
		$eventManager->attach(MvcEvent::EVENT_RENDER, function ($e) {
			/** error handle */
            $response = $e->getResponse();
			if ($response->getStatusCode() == 404) {
				$e->getViewModel()->setTemplate('error/404');
			}
			
			if ($response->getStatusCode() == 500) {
				$e->getViewModel()->setTemplate('error/500');
			}
			/** end error handle */
			
			/** Translator */
			$app = $e->getApplication();   
			$serviceManager = $app->getServiceManager();
			$view = $serviceManager->get('Zend\View\View');
			$strategy = $serviceManager->get('SmartyModule\View\Strategy\SmartyStrategy');
			$renderer = $strategy->getRenderer();
			$resolver = $serviceManager->get('viewresolver');
			$renderer->setResolver($resolver);
			$smarty = $renderer->getEngine();
		
			if(count($e->getRouteMatch()) > 0)
			{
				$lang = $e->getRouteMatch()->getParam('lang');
				if (strtolower($lang) != 'en' && strtolower($lang) != 'id')
				$lang = 'id';
				
				switch($lang){
					case 'id' :
						$lang = 'id_ID';
						break;
					case 'en' :
						$lang = 'en_US';
						break;
					default :
						$lang = 'id_ID';
						break;
				}
				
				$modulName 	= $e->getRouteMatch()->getMatchedRouteName();
				$sm = $e->getApplication()->getServiceManager();
				$translator = $sm->get('translator');
				/**
				$translator->addTranslationFile("phparray", 
												MODULE_PATH.'/modules/'.$modulName.'/language/lang.array.'.$lang.'.php');
				*/
				$translator->addTranslationFile("gettext", 
												MODULE_PATH.'/language/'.$lang.'.mo');	
								
				$sm->get('ViewHelperManager')->get('translate')->setTranslator($translator);
				
				$smarty->registerObject( 'translator', $translator );
				$smarty->registerPlugin( "block","t", "SmartyModule\Service\SmartyPlugins::do_translation" );
				//var_dump($translator->translate("Name"));
				//exit();
			}
			/** End Translator */
        }, -1000);
		
		
		/**
		 * Log any Uncaught Exceptions, including all Exceptions in the stack
		 */
		
		$moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
		
		/**
		 * Log any Uncaught Exceptions, including all Exceptions in the stack
		 */
		$sharedManager = $e->getApplication()->getEventManager()->getSharedManager();
		$sm = $e->getApplication()->getServiceManager();
		$sharedManager->attach('Zend\Mvc\Application', 'dispatch.error',
			 function($e) use ($sm) {
				if ($e->getParam('exception')){
					$ex = $e->getParam('exception');
					do {
						$sm->get('Logger')->crit(
							sprintf(
							   "%s:%d %s (%d) [%s]\n", 
								$ex->getFile(), 
								$ex->getLine(), 
								$ex->getMessage(), 
								$ex->getCode(), 
								get_class($ex)
							)
						);
					}
					while($ex = $ex->getPrevious());
				}
			 }
		);
		
		/** Begin Call Service Table */
		$serviceManager = $e->getApplication()->getServiceManager();
		$dbAdapter 		= $serviceManager->get('DbAdapter');
		$serviceTable 	= new ServiceTable($dbAdapter);
		/** End Call Service Table */
		
		/** set constans roles*/
		$roles	= array(array('KODE'	=> 'ADD', 'value' => 'ROLEADD'),
						array('KODE'	=> 'VIEW', 'value' => 'ROLEVIEW'),
						array('KODE'	=> 'EDIT', 'value' => 'ROLEEDIT'),
						array('KODE'	=> 'DELETE', 'value' => 'ROLEDEL'),
						array('KODE'	=> 'DELETE', 'value' => 'ROLERIP'));
		
		foreach($roles as $key_roles){
			defined($key_roles['KODE'])
    			|| define($key_roles['KODE'], $key_roles['value']);
		}
		/** end set constans roles*/
		
		/** Begin Setup the Cache */
		$cache = new CustomCache(array( 'name'      => 'dbcachemodules',
      									'path'      => DATA_DIR.'tmp/cache/',
      									'extension' => '.cache'));
								 
		/** End Setup the Cache*/
		
		/** set constans modules*/
		$cache->store('modules',$serviceTable->getModules());
		$restModule = $cache->retrieve('modules');
		
		foreach($restModule as $key_modules){
			defined($key_modules['KODE'])
    			|| define($key_modules['KODE'], $key_modules['IDMODUL']);
		}
		/** end set constans modules*/
		
		/** Check TOKENID */
		if(isset($serviceManager->get('AuthService')->getStorage()->read()->TOKENID))
		{
			$TOKENID = $serviceManager->get('AuthService')->getStorage()->read()->TOKENID;
			if(!$serviceManager->get('Privilege')->checkTokenId($TOKENID))
			{
				$serviceManager->get('AuthService')->clearIdentity();
				$user_session = new Container('USER');
				$user_session->getManager()->getStorage()->clear();
			}
			
		}
		/** End Check TOKENID */
		
		/** set constans role modules view */
		if(isset($serviceManager->get('AuthService')->getStorage()->read()->IDGROUP)){
			$IDGROUP = $serviceManager->get('AuthService')->getStorage()->read()->IDGROUP;
			
			foreach($restModule as $key_modules)
			{
				$roleView = (int)$serviceManager->get('Privilege')->check($IDGROUP, $key_modules['IDMODUL'], VIEW);
				defined("VIEW_".$key_modules['KODE'])
					|| define("VIEW_".$key_modules['KODE'], $roleView);
			}
		}
		/** end set constans role modules view */
		
		/* Local application configuration in /config/autoload/local.php */
		$config = $serviceManager->get('Config');
		$phpSettings = isset($config['phpSettings']) ? $config['phpSettings'] : array();
		if(!empty($phpSettings)) {
			foreach($phpSettings as $key => $value) {
				ini_set($key, $value);
			}
		}	
		/** end */
    }
	
	public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'DbAdapter' =>  function($sm) {
                    $config = $sm->get('config');
                    $config = $config['db'];
                    $dbAdapter = new Adapter($config);
                    return $dbAdapter;
                },
                
				'Logger' => function($sm){
					$logger = new \Zend\Log\Logger;
					$writer = new \Zend\Log\Writer\Stream(LOGS_DIR.'error/'.date('Y-m-d').'-error.log');
					$logger->addWriter($writer);  
			
					return $logger;
				}, 
            ),
			
			
        );
    }
	
	public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
	
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

}
