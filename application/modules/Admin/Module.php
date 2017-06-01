<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     AdminModule
 */

namespace Admin;

use Admin\Model\UserTable,
	Admin\Model\IdentitasTable,
	Admin\Model\GroupTable,
	Admin\Media\Model\ImageTable,
	Admin\Model\ProfileTable,
	Admin\Model\ActivityTable,
	Admin\Model\PerusahaanTable,
	Admin\Model\TargetTable,
	Admin\Model\VehicleTable;

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
					'Admin\Media' => __DIR__ . '/src/Media',
                ),
            ),
        );
    }
    
    public function getServiceConfig()
    {
		return array(
			'factories' => array(
				/** USER */
				'Admin\Model\UserTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new UserTable($dbAdapter);
					return $table;
				},
				
				/** IDENTITAS */
				'Admin\Model\IdentitasTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new IdentitasTable($dbAdapter);
					return $table;
				},
				
				/** GROUP */
				'Admin\Model\GroupTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new GroupTable($dbAdapter);
					return $table;
				},
				
				/** IMAGE */
				'Admin\Media\Model\ImageTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new ImageTable($dbAdapter);
					return $table;
				},
				
				/** PROFILE */
				'Admin\Model\ProfileTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new ProfileTable($dbAdapter);
					return $table;
				},
				
				/** USER ACTIVITY */
				'Admin\Model\ActivityTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new ActivityTable($dbAdapter);
					return $table;
				},
			
				/** PERUSAHAAN */
				'Admin\Model\PerusahaanTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PerusahaanTable($dbAdapter);
					return $table;
				},
			
				/** TARGET */
				'Admin\Model\TargetTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new TargetTable($dbAdapter);
					return $table;
				},
			
				/** VEHICLE */
				'Admin\Model\VehicleTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new VehicleTable($dbAdapter);
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