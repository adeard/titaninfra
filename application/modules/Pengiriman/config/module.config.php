<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     PengirimanModule
 */

return array(
	
    'controllers' => array(
        'invokables' => array(
			/** CONTAINER */
			'Pengiriman\Container\Controller\Container' 	  => 'Pengiriman\Container\Controller\ContainerController',
			'Pengiriman\Container\Controller\Containerdetail' => 'Pengiriman\Container\Controller\ContainerdetailController',
			
			/** KEMASAN */
			'Pengiriman\Kemasan\Controller\Kemasan' 	  => 'Pengiriman\Kemasan\Controller\KemasanController',
			'Pengiriman\Kemasan\Controller\Kemasandetail' => 'Pengiriman\Kemasan\Controller\KemasandetailController',
			
			/** TANGKI */
			'Pengiriman\Tangki\Controller\Tangki' 	  	=> 'Pengiriman\Tangki\Controller\TangkiController',
			'Pengiriman\Tangki\Controller\Tangkidetail' => 'Pengiriman\Tangki\Controller\TangkidetailController',
			
			/** TERMINAL */
			'Pengiriman\Terminal\Controller\Terminal' 	  	=> 'Pengiriman\Terminal\Controller\TerminalController',
			'Pengiriman\Terminal\Controller\Terminaldetail' => 'Pengiriman\Terminal\Controller\TerminaldetailController',
			
			/** PERMOHONAN PLP */
			'Pengiriman\Permohonanplp\Controller\Permohonanplp' => 
			'Pengiriman\Permohonanplp\Controller\PermohonanplpController',
			'Pengiriman\Permohonanplp\Controller\Permohonanplpdetail' => 'Pengiriman\Permohonanplp\Controller\PermohonanplpdetailController',
			
			'Pengiriman\Permohonanplp\Controller\Permohonanplpkms' => 'Pengiriman\Permohonanplp\Controller\PermohonanplpkmsController',
			'Pengiriman\Permohonanplp\Controller\Permohonanplpkmsdetail' => 'Pengiriman\Permohonanplp\Controller\PermohonanplpkmsdetailController',
	
			/** PEMBATALAN PLP */
			'Pengiriman\Pembatalanplp\Controller\Pembatalanplp' => 
			'Pengiriman\Pembatalanplp\Controller\PembatalanplpController',
			'Pengiriman\Pembatalanplp\Controller\Pembatalanplpdetail' => 'Pengiriman\Pembatalanplp\Controller\PembatalanplpdetailController',
			
			'Pengiriman\Pembatalanplp\Controller\Pembatalanplpkms' => 'Pengiriman\Pembatalanplp\Controller\PembatalanplpkmsController',
			'Pengiriman\Pembatalanplp\Controller\Pembatalanplpkmsdetail' => 'Pengiriman\Pembatalanplp\Controller\PembatalanplpkmsdetailController',
        ),
    ),

    'router' => array(
        'routes' => array(
			/** CONTAINER */
            'pengiriman/container' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/pengiriman/container[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pengiriman\Container\Controller\Container',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			'pengiriman/containerdetail' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/pengiriman/containerdetail[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pengiriman\Container\Controller\Containerdetail',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			/** KEMASAN */
            'pengiriman/kemasan' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/pengiriman/kemasan[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pengiriman\Kemasan\Controller\Kemasan',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			'pengiriman/kemasandetail' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/pengiriman/kemasandetail[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pengiriman\Kemasan\Controller\Kemasandetail',
                        'action'     => 'list',
                    ),
                ),
            ),
			
			/** TANGKI */
            'pengiriman/tangki' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/pengiriman/tangki[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pengiriman\Tangki\Controller\Tangki',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			'pengiriman/tangkidetail' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/pengiriman/tangkidetail[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pengiriman\Tangki\Controller\Tangkidetail',
                        'action'     => 'list',
                    ),
                ),
            ),
			
	
			/** TERMINAL */
            'pengiriman/terminal' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/pengiriman/terminal[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pengiriman\Terminal\Controller\Terminal',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			'pengiriman/terminaldetail' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/pengiriman/terminaldetail[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pengiriman\Terminal\Controller\Terminaldetail',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			/** PERMOHONAN PLP */
            'pengiriman/permohonanplp' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/pengiriman/permohonanplp[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pengiriman\Permohonanplp\Controller\Permohonanplp',
                        'action'     => 'main',
                    ),
                ),
            ),
	
			'pengiriman/permohonanplpdetail' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/pengiriman/permohonanplpdetail[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pengiriman\Permohonanplp\Controller\Permohonanplpdetail',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			'pengiriman/permohonanplpkms' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/pengiriman/permohonanplpkms[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pengiriman\Permohonanplp\Controller\Permohonanplpkms',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			'pengiriman/permohonanplpkmsdetail' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/pengiriman/permohonanplpkmsdetail[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pengiriman\Permohonanplp\Controller\Permohonanplpkmsdetail',
                        'action'     => 'list',
                    ),
                ),
            ),
	
	
			/** PEMBATALAN PLP */
            'pengiriman/pembatalanplp' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/pengiriman/pembatalanplp[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pengiriman\Pembatalanplp\Controller\Pembatalanplp',
                        'action'     => 'main',
                    ),
                ),
            ),
	
			'pengiriman/pembatalanplpdetail' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/pengiriman/pembatalanplpdetail[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pengiriman\Pembatalanplp\Controller\Pembatalanplpdetail',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			'pengiriman/pembatalanplpkms' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/pengiriman/pembatalanplpkms[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pengiriman\Pembatalanplp\Controller\Pembatalanplpkms',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			'pengiriman/pembatalanplpkmsdetail' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/pengiriman/pembatalanplpkmsdetail[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pengiriman\Pembatalanplp\Controller\Pembatalanplpkmsdetail',
                        'action'     => 'list',
                    ),
                ),
            ),
	
	
	
        ),
    ),
	 

    'view_manager' => array(
		'template_map' => array(
			
            /** CONTAINER */
            'pengiriman/container/list'		=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Container/Container/List'.TPLEXT,
			'pengiriman/container/add'   	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Container/Container/Add'.TPLEXT,
			'pengiriman/container/edit' 	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Container/Container/Edit'.TPLEXT,
	
			'pengiriman/containerdetail/add'   => __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Container/Containerdetail/Add'.TPLEXT,
			'pengiriman/containerdetail/edit' 	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Container/Containerdetail/Edit'.TPLEXT,
	
			/** KEMASAN */
            'pengiriman/kemasan/list'		=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Kemasan/Kemasan/List'.TPLEXT,
			'pengiriman/kemasan/add'   		=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Kemasan/Kemasan/Add'.TPLEXT,
			'pengiriman/kemasan/edit' 		=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Kemasan/Kemasan/Edit'.TPLEXT,
	
			'pengiriman/kemasandetail/add'  => __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Kemasan/Kemasandetail/Add'.TPLEXT,
			'pengiriman/kemasandetail/edit' => __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Kemasan/Kemasandetail/Edit'.TPLEXT,
		
			/** TANGKI */
            'pengiriman/tangki/list'		=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Tangki/Tangki/List'.TPLEXT,
			'pengiriman/tangki/add'   		=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Tangki/Tangki/Add'.TPLEXT,
			'pengiriman/tangki/edit' 		=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Tangki/Tangki/Edit'.TPLEXT,
	
			'pengiriman/tangkidetail/add'  => __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Tangki/Tangkidetail/Add'.TPLEXT,
			'pengiriman/tangkidetail/edit' => __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Tangki/Tangkidetail/Edit'.TPLEXT,
	
			/** TERMINAL */
            'pengiriman/terminal/list'		=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Terminal/Terminal/List'.TPLEXT,
			'pengiriman/terminal/add'   		=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Terminal/Terminal/Add'.TPLEXT,
			'pengiriman/terminal/edit' 		=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Terminal/Terminal/Edit'.TPLEXT,
	
			'pengiriman/terminaldetail/add'  => __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Terminal/Terminaldetail/Add'.TPLEXT,
			'pengiriman/terminaldetail/edit' => __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Terminal/Terminaldetail/Edit'.TPLEXT,
			
			/** PERMOHONAN PLP */
			'pengiriman/permohonanplp/main'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Permohonanplp/Permohonanplp/Main'.TPLEXT,
			'pengiriman/permohonanplp/list'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Permohonanplp/Permohonanplp/List'.TPLEXT,
			'pengiriman/permohonanplp/add'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Permohonanplp/Permohonanplp/Add'.TPLEXT,
			'pengiriman/permohonanplp/edit'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Permohonanplp/Permohonanplp/Edit'.TPLEXT,
	
			'pengiriman/permohonanplpdetail/add'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Permohonanplp/Permohonanplpdetail/Add'.TPLEXT,
			'pengiriman/permohonanplpdetail/edit'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Permohonanplp/Permohonanplpdetail/Edit'.TPLEXT,
	

			'pengiriman/permohonanplpkms/list'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Permohonanplp/Permohonanplpkms/List'.TPLEXT,
			'pengiriman/permohonanplpkms/add'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Permohonanplp/Permohonanplpkms/Add'.TPLEXT,
			'pengiriman/permohonanplpkms/edit'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Permohonanplp/Permohonanplpkms/Edit'.TPLEXT,
	
			'pengiriman/permohonanplpkmsdetail/add'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Permohonanplp/Permohonanplpkmsdetail/Add'.TPLEXT,
			'pengiriman/permohonanplpkmsdetail/edit'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Permohonanplp/Permohonanplpkmsdetail/Edit'.TPLEXT,
	
			/** PEMBATALAN PLP */
			'pengiriman/pembatalanplp/main'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Pembatalanplp/Pembatalanplp/Main'.TPLEXT,
			'pengiriman/pembatalanplp/list'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Pembatalanplp/Pembatalanplp/List'.TPLEXT,
			'pengiriman/pembatalanplp/add'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Pembatalanplp/Pembatalanplp/Add'.TPLEXT,
			'pengiriman/pembatalanplp/edit'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Pembatalanplp/Pembatalanplp/Edit'.TPLEXT,
	
			'pengiriman/pembatalanplpdetail/add'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Pembatalanplp/Pembatalanplpdetail/Add'.TPLEXT,
			'pengiriman/pembatalanplpdetail/edit'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Pembatalanplp/Pembatalanplpdetail/Edit'.TPLEXT,
	

			'pengiriman/pembatalanplpkms/list'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Pembatalanplp/Pembatalanplpkms/List'.TPLEXT,
			'pengiriman/pembatalanplpkms/add'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Pembatalanplp/Pembatalanplpkms/Add'.TPLEXT,
			'pengiriman/pembatalanplpkms/edit'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Pembatalanplp/Pembatalanplpkms/Edit'.TPLEXT,
	
			'pengiriman/pembatalanplpkmsdetail/add'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Pembatalanplp/Pembatalanplpkmsdetail/Add'.TPLEXT,
			'pengiriman/pembatalanplpkmsdetail/edit'	=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Pengiriman/Pembatalanplp/Pembatalanplpkmsdetail/Edit'.TPLEXT,
	
			
		),
        'template_path_stack' => array(
            'tps' => __DIR__ . '/../../../view/'.VIEW_THEMES,
        ),
    ),
);