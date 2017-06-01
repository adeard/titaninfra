<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     AuthModule
 */

namespace Auth;

use Auth\Model\AuthTable;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\Mvc\ModuleRouteListener;

use Zend\Authentication\AuthenticationService;
use Zend\Authentication\Adapter\DbTable as DbTableAuthAdapter;

class Module implements AutoloaderProviderInterface
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . str_replace('\\', '/' , __NAMESPACE__),
                ),
            ),
        );
    }
    
    public function getServiceConfig()
    {
		return array(
			'factories' => array(
				'Auth\Model\AuthTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new AuthTable($dbAdapter);
					return $table;
				},
				
				'Auth\Model\AuthStorage' => function($sm){
					return new \Auth\Model\AuthStorage('zf2tutorial');  
				},
				
				'AuthService' => function($sm) {
					$dbAdapter      = $sm->get('DbAdapter');
					$dbTableAuthAdapter  = new DbTableAuthAdapter($dbAdapter, 'USERS','USERNAME','PASSWORD', 'MD5(?)');
					
					$authService = new AuthenticationService();
					$authService->setAdapter($dbTableAuthAdapter);
					$authService->setStorage($sm->get('Auth\Model\AuthStorage'));
					 
					return $authService;
				},
				
				'Privilege' => function($sm) {
					$dbAdapter      = $sm->get('DbAdapter');
					$auth 	        = new AuthTable($dbAdapter);
					return $auth;

				},
				
				'TableService' => function($sm) {
					$dbAdapter      = $sm->get('DbAdapter');
					$service 	    = new \Service\Model\ServiceTable($dbAdapter);
					return $service;

				},
			),
		);
        
    }    

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}