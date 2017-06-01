<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     PenerimaanModule
 */

namespace Penerimaan;

use Penerimaan\Model\SppbpibTable;
use Penerimaan\Model\PendukungplpTable;
use Penerimaan\Model\ResponplpTable;
use Penerimaan\Model\ObplpTable;

use Penerimaan\Persetujuanplp\Model\PersetujuanplpasalTable,
	Penerimaan\Persetujuanplp\Model\PersetujuanplpasaldetailTable,
	Penerimaan\Persetujuanplp\Model\PersetujuanplpasalkmsTable,
	Penerimaan\Persetujuanplp\Model\PersetujuanplpasalkmsdetailTable;

use Penerimaan\Persetujuanplptujuan\Model\PersetujuanplptujuanTable,
	Penerimaan\Persetujuanplptujuan\Model\PersetujuanplptujuandetailTable,
	Penerimaan\Persetujuanplptujuan\Model\PersetujuanplptujuankmsTable,
	Penerimaan\Persetujuanplptujuan\Model\PersetujuanplptujuankmsdetailTable;


use Penerimaan\Pembatalanplp\Model\PembatalanplpasalTable,
	Penerimaan\Pembatalanplp\Model\PembatalanplpasaldetailTable,
	Penerimaan\Pembatalanplp\Model\PembatalanplpasalkmsTable,
	Penerimaan\Pembatalanplp\Model\PembatalanplpasalkmsdetailTable;

use Penerimaan\Pembatalanplptujuan\Model\PembatalanplptujuanTable,
	Penerimaan\Pembatalanplptujuan\Model\PembatalanplptujuandetailTable,
	Penerimaan\Pembatalanplptujuan\Model\PembatalanplptujuankmsTable,
	Penerimaan\Pembatalanplptujuan\Model\PembatalanplptujuankmsdetailTable;


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
					'Penerimaan\Persetujuanplp' 		=> __DIR__ . '/src/Persetujuanplp',
					'Penerimaan\Persetujuanplptujuan' 	=> __DIR__ . '/src/Persetujuanplptujuan',
					'Penerimaan\Pembatalanplp' 			=> __DIR__ . '/src/Pembatalanplp',
					'Penerimaan\Pembatalanplptujuan' 	=> __DIR__ . '/src/Pembatalanplptujuan',
                ),
            ),
        );
    }
    
    public function getServiceConfig()
    {
		return array(
			'factories' => array(
				/** SPPB PIB */
				'Penerimaan\Model\SppbpibTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new SppbpibTable($dbAdapter);
					return $table;
				},
				
				/** PENDUKUNG PLP */
				'Penerimaan\Model\PendukungplpTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PendukungplpTable($dbAdapter);
					return $table;
				},
				
				/** RESPON PLP */
				'Penerimaan\Model\ResponplpTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new ResponplpTable($dbAdapter);
					return $table;
				},
				
				/** OB/PLP */
				'Penerimaan\Model\ObplpTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new ObplpTable($dbAdapter);
					return $table;
				},
			
			
				/** PERSETUJUAN PLP ASAL */
				'Penerimaan\Persetujuanplp\Model\PersetujuanplpasalTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PersetujuanplpasalTable($dbAdapter);
					return $table;
				},
				'Penerimaan\Persetujuanplp\Model\PersetujuanplpasaldetailTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PersetujuanplpasaldetailTable($dbAdapter);
					return $table;
				},
			
				'Penerimaan\Persetujuanplp\Model\PersetujuanplpasalkmsTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PersetujuanplpasalkmsTable($dbAdapter);
					return $table;
				},
				'Penerimaan\Persetujuanplp\Model\PersetujuanplpasalkmsdetailTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PersetujuanplpasalkmsdetailTable($dbAdapter);
					return $table;
				},
			
				/** PERSETUJUAN PLP TUJUAN */
				'Penerimaan\Persetujuanplptujuan\Model\PersetujuanplptujuanTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PersetujuanplptujuanTable($dbAdapter);
					return $table;
				},
				'Penerimaan\Persetujuanplptujuan\Model\PersetujuanplptujuandetailTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PersetujuanplptujuandetailTable($dbAdapter);
					return $table;
				},
			
				'Penerimaan\Persetujuanplptujuan\Model\PersetujuanplptujuankmsTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PersetujuanplptujuankmsTable($dbAdapter);
					return $table;
				},
				'Penerimaan\Persetujuanplptujuan\Model\PersetujuanplptujuankmsdetailTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PersetujuanplptujuankmsdetailTable($dbAdapter);
					return $table;
				},
				
				/** PEMBATALAN PLP */
				'Penerimaan\Pembatalanplp\Model\PembatalanplpasalTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PembatalanplpasalTable($dbAdapter);
					return $table;
				},
				'Penerimaan\Pembatalanplp\Model\PembatalanplpasaldetailTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PembatalanplpasaldetailTable($dbAdapter);
					return $table;
				},
			
				'Penerimaan\Pembatalanplp\Model\PembatalanplpasalkmsTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PembatalanplpasalkmsTable($dbAdapter);
					return $table;
				},
				'Penerimaan\Pembatalanplp\Model\PembatalanplpasalkmsdetailTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PembatalanplpasalkmsdetailTable($dbAdapter);
					return $table;
				},
				
				/** PEMBATALAN PLP TUJUAN */
				'Penerimaan\Pembatalanplptujuan\Model\PembatalanplptujuanTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PembatalanplptujuanTable($dbAdapter);
					return $table;
				},
				'Penerimaan\Pembatalanplptujuan\Model\PembatalanplptujuandetailTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PembatalanplptujuandetailTable($dbAdapter);
					return $table;
				},
			
				'Penerimaan\Pembatalanplptujuan\Model\PembatalanplptujuankmsTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PembatalanplptujuankmsTable($dbAdapter);
					return $table;
				},
				'Penerimaan\Pembatalanplptujuan\Model\PembatalanplptujuankmsdetailTable' =>  function($sm) {
					$dbAdapter = $sm->get('DbAdapter');
					$table = new PembatalanplptujuankmsdetailTable($dbAdapter);
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