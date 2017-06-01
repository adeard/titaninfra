<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     DokumenModule
 */

namespace Dokumen;

use Dokumen\Model\DokumenTable,
	Dokumen\Import\Model\ImportTable;

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
                    __NAMESPACE__ 		=> __DIR__ . '/src/' . __NAMESPACE__,
					'Dokumen\Import' 	=> __DIR__ . '/src/Import',
                ),
            ),
        );
    }
    
    public function getServiceConfig()
    {
		return array(
			'factories' => array(
				/** IMPORT */
				'Dokumen\Import\Model\ImportTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new ImportTable($dbAdapter);
					return $table;
				},
			
				/** DOKUMEN */
				'Dokumen\Model\DokumenTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new DokumenTable($dbAdapter);
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