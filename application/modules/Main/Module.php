<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     MainModule
 */

namespace Main;

use Main\Model\MainTable;

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
				'Main\Model\MainTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new MainTable($dbAdapter);
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