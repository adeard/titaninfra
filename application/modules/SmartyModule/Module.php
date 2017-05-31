<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@hotmail.com;dartodinus@gmail.com>
 * @contact		+62856-8-260684
 * @package     SmartyModule
 */

namespace SmartyModule;

use Zend\ModuleManager\ModuleManager as Manager,
    Zend\EventManager\StaticEventManager,
    Zend\View\HelperPluginManager,
    Zend\Form\View\HelperConfig,
    Zend\Mvc\Router\SimpleRouteStack;

use Zend\Session\Container;	

class Module
{
	
	public function onBootstrap($e) {
		$this->initializeView($e);	
		$this->setupView($e);
	} 

	public function initializeView($e)
	{
		$app = $e->getParam('application');
		
		$request = $app->getRequest();

		// support cli requests which do not have a base path
		if (method_exists($request, 'getBasePath')) {
			$basePath = $app->getRequest()->getBasePath();
		}
		$serviceManager = $app->getServiceManager();

		$view = $serviceManager->get('Zend\View\View');
		$strategy = $serviceManager->get('SmartyModule\View\Strategy\SmartyStrategy');
		$renderer = $strategy->getRenderer();
		$resolver = $serviceManager->get('viewresolver');
		$renderer->setResolver($resolver);
        
		$smarty = $renderer->getEngine();
		$config = $serviceManager->get('Config');

        foreach ($config['smarty'] as $key=>$value) {
            if (isset($smarty->$key))
                $smarty->$key = $value;
        }

		$renderer->setHelperPluginManager(new HelperPluginManager(new HelperConfig()));
		$renderer->plugin('url')->setRouter(SimpleRouteStack::factory($config['router']['routes']));
		
		if (isset($basePath)) {
			$renderer->plugin('basePath')->setBasePath($basePath);
		}
	}
	
    public function setupView($e)
    {
          // Register a render event
          $application = $e->getParam('application');
          $serviceManager             = $application->getServiceManager();
          $view                = $serviceManager->get('Zend\View\View');
          $smartyRendererStrategy = $serviceManager->get('SmartyModule\View\Strategy\SmartyStrategy');
          $view->addRenderingStrategy(array($smartyRendererStrategy, 'selectRenderer'), 100);
          $view->addResponseStrategy(array($smartyRendererStrategy,  'injectResponse'), 100);
    } 

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig()
    {
		$user_session = new Container('USER');
		if($user_session->getCacheId){
			$dir_chace = '/'.$_SERVER['REMOTE_ADDR'].'/'.(int)$user_session->getCacheId;
		}else{
			$dir_chace = '/'.$_SERVER['REMOTE_ADDR'];
		}

		// Define path to chace and compile smarty
		defined('SMARTY_COMPILE')
			|| define('SMARTY_COMPILE', DATA_DIR.'smarty_compile'.$dir_chace);
			
		defined('SMARTY_CACHE')
			|| define('SMARTY_CACHE', DATA_DIR.'smarty_cache'.$dir_chace);
	
        return include __DIR__ . '/config/module.config.php';
    }


}
