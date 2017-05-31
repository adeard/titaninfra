<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     PenerimaanModule
 */

return array(
	
    'controllers' => array(
        'invokables' => array(
            'Penerimaan\Controller\Sppbpib'  	=> 'Penerimaan\Controller\SppbpibController',
			'Penerimaan\Controller\Pendukungplp'=> 'Penerimaan\Controller\PendukungplpController',
			'Penerimaan\Controller\Responplp'	=> 'Penerimaan\Controller\ResponplpController',
			'Penerimaan\Controller\Obplp'		=> 'Penerimaan\Controller\ObplpController',
			
			/** PERSETUJUAN PLP ASAL */
			'Penerimaan\Persetujuanplp\Controller\Persetujuanplpasal' =>
			'Penerimaan\Persetujuanplp\Controller\PersetujuanplpasalController',
			'Penerimaan\Persetujuanplp\Controller\Persetujuanplpasaldetail' => 'Penerimaan\Persetujuanplp\Controller\PersetujuanplpasaldetailController',
			
			'Penerimaan\Persetujuanplp\Controller\Persetujuanplpasalkms' => 'Penerimaan\Persetujuanplp\Controller\PersetujuanplpasalkmsController',
			'Penerimaan\Persetujuanplp\Controller\Persetujuanplpasalkmsdetail' => 'Penerimaan\Persetujuanplp\Controller\PersetujuanplpasalkmsdetailController',
		
			/** PERSETUJUAN PLP TUJUAN */
			'Penerimaan\Persetujuanplptujuan\Controller\Persetujuanplptujuan' =>
			'Penerimaan\Persetujuanplptujuan\Controller\PersetujuanplptujuanController',
			'Penerimaan\Persetujuanplptujuan\Controller\Persetujuanplptujuandetail' => 'Penerimaan\Persetujuanplptujuan\Controller\PersetujuanplptujuandetailController',
			
			'Penerimaan\Persetujuanplptujuan\Controller\Persetujuanplptujuankms' => 'Penerimaan\Persetujuanplptujuan\Controller\PersetujuanplptujuankmsController',
			'Penerimaan\Persetujuanplptujuan\Controller\Persetujuanplptujuankmsdetail' => 'Penerimaan\Persetujuanplptujuan\Controller\PersetujuanplptujuankmsdetailController',
	
			/** PEMBATALAN PLP */
			'Penerimaan\Pembatalanplp\Controller\Pembatalanplpasal' =>
			'Penerimaan\Pembatalanplp\Controller\PembatalanplpasalController',
			'Penerimaan\Pembatalanplp\Controller\Pembatalanplpasaldetail' => 'Penerimaan\Pembatalanplp\Controller\PembatalanplpasaldetailController',
			
			'Penerimaan\Pembatalanplp\Controller\Pembatalanplpasalkms' => 'Penerimaan\Pembatalanplp\Controller\PembatalanplpasalkmsController',
			'Penerimaan\Pembatalanplp\Controller\Pembatalanplpasalkmsdetail' => 'Penerimaan\Pembatalanplp\Controller\PembatalanplpasalkmsdetailController',
	
			/** PEMBATALAN PLP TUJUAN */
			'Penerimaan\Pembatalanplptujuan\Controller\Pembatalanplptujuan' =>
			'Penerimaan\Pembatalanplptujuan\Controller\PembatalanplptujuanController',
			'Penerimaan\Pembatalanplptujuan\Controller\Pembatalanplptujuandetail' => 'Penerimaan\Pembatalanplptujuan\Controller\PembatalanplptujuandetailController',
			
			'Penerimaan\Pembatalanplptujuan\Controller\Pembatalanplptujuankms' => 'Penerimaan\Pembatalanplptujuan\Controller\PembatalanplptujuankmsController',
			'Penerimaan\Pembatalanplptujuan\Controller\Pembatalanplptujuankmsdetail' => 'Penerimaan\Pembatalanplptujuan\Controller\PembatalanplptujuankmsdetailController',
	
        ),
    ),

    'router' => array(
        'routes' => array(
            /** SPPB PIB */
            'penerimaan/sppbpib' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/penerimaan/sppbpib[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Penerimaan\Controller\Sppbpib',
                        'action'     => 'list',
                    ),
                ),
            ),
            
			/** PENDUKUNG PLP */
            'penerimaan/pendukungplp' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/penerimaan/pendukungplp[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Penerimaan\Controller\Pendukungplp',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			/** RESPON PLP */
            'penerimaan/responplp' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/penerimaan/responplp[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Penerimaan\Controller\Responplp',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			/** OB/PLP */
            'penerimaan/obplp' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/penerimaan/obplp[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Penerimaan\Controller\Obplp',
                        'action'     => 'list',
                    ),
                ),
            ),
			
	
			/** PERSETUJUAN PLP ASAL */
            'penerimaan/persetujuanplpasal' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/penerimaan/persetujuanplpasal[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Penerimaan\Persetujuanplp\Controller\Persetujuanplpasal',
                        'action'     => 'main',
                    ),
                ),
            ),
	
			'penerimaan/persetujuanplpasaldetail' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/penerimaan/persetujuanplpasaldetail[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Penerimaan\Persetujuanplp\Controller\Persetujuanplpasaldetail',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			'penerimaan/persetujuanplpasalkms' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/penerimaan/persetujuanplpasalkms[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Penerimaan\Persetujuanplp\Controller\Persetujuanplpasalkms',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			'penerimaan/persetujuanplpasalkmsdetail' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/penerimaan/persetujuanplpasalkmsdetail[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Penerimaan\Persetujuanplp\Controller\Persetujuanplpasalkmsdetail',
                        'action'     => 'list',
                    ),
                ),
            ),
	
		
			/** PERSETUJUAN PLP TUJUAN */
			'penerimaan/persetujuanplptujuan' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/penerimaan/persetujuanplptujuan[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Penerimaan\Persetujuanplptujuan\Controller\Persetujuanplptujuan',
                        'action'     => 'main',
                    ),
                ),
            ),
	
			'penerimaan/persetujuanplptujuandetail' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/penerimaan/persetujuanplptujuandetail[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Penerimaan\Persetujuanplptujuan\Controller\Persetujuanplptujuandetail',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			'penerimaan/persetujuanplptujuankms' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/penerimaan/persetujuanplptujuankms[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Penerimaan\Persetujuanplptujuan\Controller\Persetujuanplptujuankms',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			'penerimaan/persetujuanplptujuankmsdetail' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/penerimaan/persetujuanplptujuankmsdetail[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Penerimaan\Persetujuanplptujuan\Controller\Persetujuanplptujuankmsdetail',
                        'action'     => 'list',
                    ),
                ),
            ),
	
	
			/** PEMBATALAN PLP */
            'penerimaan/pembatalanplpasal' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/penerimaan/pembatalanplpasal[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Penerimaan\Pembatalanplp\Controller\Pembatalanplpasal',
                        'action'     => 'main',
                    ),
                ),
            ),
	
			'penerimaan/pembatalanplpasaldetail' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/penerimaan/pembatalanplpasaldetail[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Penerimaan\Pembatalanplp\Controller\Pembatalanplpasaldetail',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			'penerimaan/pembatalanplpasalkms' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/penerimaan/pembatalanplpasalkms[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Penerimaan\Pembatalanplp\Controller\Pembatalanplpasalkms',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			'penerimaan/pembatalanplpasalkmsdetail' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/penerimaan/pembatalanplpasalkmsdetail[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Penerimaan\Pembatalanplp\Controller\Pembatalanplpasalkmsdetail',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			/** PEMBATALAN PLP TUJUAN */
			'penerimaan/pembatalanplptujuan' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/penerimaan/pembatalanplptujuan[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Penerimaan\Pembatalanplptujuan\Controller\Pembatalanplptujuan',
                        'action'     => 'main',
                    ),
                ),
            ),
	
			'penerimaan/pembatalanplptujuandetail' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/penerimaan/pembatalanplptujuandetail[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Penerimaan\Pembatalanplptujuan\Controller\Pembatalanplptujuandetail',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			'penerimaan/pembatalanplptujuankms' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/penerimaan/pembatalanplptujuankms[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Penerimaan\Pembatalanplptujuan\Controller\Pembatalanplptujuankms',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			'penerimaan/pembatalanplptujuankmsdetail' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/penerimaan/pembatalanplptujuankmsdetail[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Penerimaan\Pembatalanplptujuan\Controller\Pembatalanplptujuankmsdetail',
                        'action'     => 'list',
                    ),
                ),
            ),
	
        ),
    ),
	 

    'view_manager' => array(
		'template_map' => array(

            /** SPPB PIB */
		    'penerimaan/sppbpib/list' 	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Penerimaan/Penerimaan/Sppbpib/List'.TPLEXT,
			'penerimaan/sppbpib/detail' 	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Penerimaan/Penerimaan/Sppbpib/Detail'.TPLEXT,
	
			/** PENDUKUNG PLP */
		    'penerimaan/pendukungplp/list' 	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Penerimaan/Penerimaan/Pendukungplp/List'.TPLEXT,
			'penerimaan/pendukungplp/detail' 	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Penerimaan/Penerimaan/Pendukungplp/Detail'.TPLEXT,
	
			/** RESPON PLP */
		    'penerimaan/responplp/list' 	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Penerimaan/Penerimaan/Responplp/List'.TPLEXT,
			'penerimaan/responplp/terima' 	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Penerimaan/Penerimaan/Responplp/Terima'.TPLEXT,
			'penerimaan/responplp/tolak' 	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Penerimaan/Penerimaan/Responplp/Tolak'.TPLEXT,
			'penerimaan/responplp/detail' 	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Penerimaan/Penerimaan/Responplp/Detail'.TPLEXT,
	
			/** OB/PLP */
		    'penerimaan/obplp/list' 	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Penerimaan/Penerimaan/Obplp/List'.TPLEXT,
			'penerimaan/obplp/detail' 	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Penerimaan/Penerimaan/Obplp/Detail'.TPLEXT,
	
			/** PERSETUJUAN PLP ASAL */
			'penerimaan/persetujuanplpasal/main'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/penerimaan/Persetujuanplp/Persetujuanplpasal/Main'.TPLEXT,
			'penerimaan/persetujuanplpasal/list'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/penerimaan/Persetujuanplp/Persetujuanplpasal/List'.TPLEXT,
			'penerimaan/persetujuanplpasal/detail'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/penerimaan/Persetujuanplp/Persetujuanplpasal/Detail'.TPLEXT,
	
			'penerimaan/persetujuanplpasalkms/list'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/penerimaan/Persetujuanplp/Persetujuanplpasalkms/List'.TPLEXT,
			'penerimaan/persetujuanplpasalkms/detail'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/penerimaan/Persetujuanplp/Persetujuanplpasalkms/Detail'.TPLEXT,
	
			
			/** PERSETUJUAN PLP TUJUAN */
			'penerimaan/persetujuanplptujuan/main'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/penerimaan/Persetujuanplptujuan/Persetujuanplptujuan/Main'.TPLEXT,
			'penerimaan/persetujuanplptujuan/list'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/penerimaan/Persetujuanplptujuan/Persetujuanplptujuan/List'.TPLEXT,
			'penerimaan/persetujuanplptujuan/detail'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/penerimaan/Persetujuanplptujuan/Persetujuanplptujuan/Detail'.TPLEXT,
	
			'penerimaan/persetujuanplptujuankms/list'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/penerimaan/Persetujuanplptujuan/Persetujuanplptujuankms/List'.TPLEXT,
			'penerimaan/persetujuanplptujuankms/detail'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/penerimaan/Persetujuanplptujuan/Persetujuanplptujuankms/Detail'.TPLEXT,
	
	
			/** PEMBATALAN PLP */
			'penerimaan/pembatalanplpasal/main'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/penerimaan/Pembatalanplp/Pembatalanplpasal/Main'.TPLEXT,
			'penerimaan/pembatalanplpasal/list'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/penerimaan/Pembatalanplp/Pembatalanplpasal/List'.TPLEXT,
			'penerimaan/pembatalanplpasal/detail'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/penerimaan/Pembatalanplp/Pembatalanplpasal/Detail'.TPLEXT,
	
			'penerimaan/pembatalanplpasalkms/list'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/penerimaan/Pembatalanplp/Pembatalanplpasalkms/List'.TPLEXT,
			'penerimaan/pembatalanplpasalkms/detail'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/penerimaan/Pembatalanplp/Pembatalanplpasalkms/Detail'.TPLEXT,
	
			/** PEMBATALAN PLP TUJUAN */
			'penerimaan/pembatalanplptujuan/main'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/penerimaan/Pembatalanplptujuan/Pembatalanplptujuan/Main'.TPLEXT,
			'penerimaan/pembatalanplptujuan/list'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/penerimaan/Pembatalanplptujuan/Pembatalanplptujuan/List'.TPLEXT,
			'penerimaan/pembatalanplptujuan/detail'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/penerimaan/Pembatalanplptujuan/Pembatalanplptujuan/Detail'.TPLEXT,
	
			'penerimaan/pembatalanplptujuankms/list'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/penerimaan/Pembatalanplptujuan/Pembatalanplptujuankms/List'.TPLEXT,
			'penerimaan/pembatalanplptujuankms/detail'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/penerimaan/Pembatalanplptujuan/Pembatalanplptujuankms/Detail'.TPLEXT,
			
		),
        'template_path_stack' => array(
            'penerimaan' => __DIR__ . '/../../../view/'.VIEW_THEMES,
        ),
    ),
);