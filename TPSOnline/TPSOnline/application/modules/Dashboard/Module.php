<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     DashboardModule
 */

namespace Dashboard;

use Dashboard\Model\DashboardTable;

class Module
{
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
    
    public function getServiceConfig()
    {
		return array(
			'factories' => array(
				'Dashboard\Model\DashboardTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new DashboardTable($dbAdapter);
					return $table;
				},
			),
		);
        
    }    

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}