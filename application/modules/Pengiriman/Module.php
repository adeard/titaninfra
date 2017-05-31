<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     PengirimanModule
 */

namespace Pengiriman;

use Pengiriman\Container\Model\ContainerTable,
	Pengiriman\Container\Model\ContainerdetailTable;

use Pengiriman\Kemasan\Model\KemasanTable,
	Pengiriman\Kemasan\Model\KemasandetailTable;

use Pengiriman\Tangki\Model\TangkiTable,
	Pengiriman\Tangki\Model\TangkidetailTable;

use Pengiriman\Terminal\Model\TerminalTable,
	Pengiriman\Terminal\Model\TerminaldetailTable;

use Pengiriman\Permohonanplp\Model\PermohonanplpTable,
	Pengiriman\Permohonanplp\Model\PermohonanplpdetailTable,
	Pengiriman\Permohonanplp\Model\PermohonanplpkmsTable,
	Pengiriman\Permohonanplp\Model\PermohonanplpkmsdetailTable;


use Pengiriman\Pembatalanplp\Model\PembatalanplpTable,
	Pengiriman\Pembatalanplp\Model\PembatalanplpdetailTable,
	Pengiriman\Pembatalanplp\Model\PembatalanplpkmsTable,
	Pengiriman\Pembatalanplp\Model\PembatalanplpkmsdetailTable;

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
                    __NAMESPACE__ 	=> __DIR__ . '/src/' . __NAMESPACE__,
					'Pengiriman\Container' 		=> __DIR__ . '/src/Container',
					'Pengiriman\Kemasan' 		=> __DIR__ . '/src/Kemasan',
					'Pengiriman\Tangki' 		=> __DIR__ . '/src/Tangki',
					'Pengiriman\Terminal' 		=> __DIR__ . '/src/Terminal',
					'Pengiriman\Permohonanplp' 	=> __DIR__ . '/src/Permohonanplp',
					'Pengiriman\Pembatalanplp' 	=> __DIR__ . '/src/Pembatalanplp',
                ),
            ),
        );
    }
    
    public function getServiceConfig()
    {
		return array(
			'factories' => array(
				/** CONTAINER */
				'Pengiriman\Container\Model\ContainerTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new ContainerTable($dbAdapter);
					return $table;
				},
				'Pengiriman\Container\Model\ContainerdetailTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new ContainerdetailTable($dbAdapter);
					return $table;
				},
			
				/** KEMASAN */
				'Pengiriman\Kemasan\Model\KemasanTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new KemasanTable($dbAdapter);
					return $table;
				},
				'Pengiriman\Kemasan\Model\KemasandetailTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new KemasandetailTable($dbAdapter);
					return $table;
				},
			
				/** TANGKI */
				'Pengiriman\Tangki\Model\TangkiTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new TangkiTable($dbAdapter);
					return $table;
				},
				'Pengiriman\Tangki\Model\TangkidetailTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new TangkidetailTable($dbAdapter);
					return $table;
				},
				
				/** TERMINAL */
				'Pengiriman\Terminal\Model\TerminalTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new TerminalTable($dbAdapter);
					return $table;
				},
				'Pengiriman\Terminal\Model\TerminaldetailTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new TerminaldetailTable($dbAdapter);
					return $table;
				},
			
				/** PERMOHONAN PLP */
				'Pengiriman\Permohonanplp\Model\PermohonanplpTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PermohonanplpTable($dbAdapter);
					return $table;
				},
				'Pengiriman\Permohonanplp\Model\PermohonanplpdetailTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PermohonanplpdetailTable($dbAdapter);
					return $table;
				},
			
				'Pengiriman\Permohonanplp\Model\PermohonanplpkmsTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PermohonanplpkmsTable($dbAdapter);
					return $table;
				},
				'Pengiriman\Permohonanplp\Model\PermohonanplpkmsdetailTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PermohonanplpkmsdetailTable($dbAdapter);
					return $table;
				},
				
				/** PEMBATALAN PLP */
				'Pengiriman\Pembatalanplp\Model\PembatalanplpTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PembatalanplpTable($dbAdapter);
					return $table;
				},
				'Pengiriman\Pembatalanplp\Model\PembatalanplpdetailTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PembatalanplpdetailTable($dbAdapter);
					return $table;
				},
			
				'Pengiriman\Pembatalanplp\Model\PembatalanplpkmsTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PembatalanplpkmsTable($dbAdapter);
					return $table;
				},
				'Pengiriman\Pembatalanplp\Model\PembatalanplpkmsdetailTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PembatalanplpkmsdetailTable($dbAdapter);
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