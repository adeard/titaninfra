<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     DokumenModule
 */

return array(
	
    'controllers' => array(
        'invokables' => array(
			'Dokumen\Import\Controller\Import' => 'Dokumen\Import\Controller\ImportController',
			'Dokumen\Controller\Dokumen' => 'Dokumen\Controller\DokumenController',
        ),
    ),

    'router' => array(
        'routes' => array(
			/** IMPORT */
            'dokumen/import' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/dokumen/import[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Dokumen\Import\Controller\Import',
                        'action'     => 'list',
                    ),
                ),
            ),
	
			/** DOKUMEN */
            'dokumen/dokumen' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/dokumen/dokumen[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Dokumen\Controller\Dokumen',
                        'action'     => 'list',
                    ),
                ),
            ),
			
        ),
    ),
	 

    'view_manager' => array(
		'template_map' => array(
			/** IMPORT */
            'dokumen/import/list'			=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Dokumen/Import/List'.TPLEXT,
	
			/** DOKUMEN */
            'dokumen/dokumen/list'			=> __DIR__ . '/../../../view/'.
			 VIEW_THEMES.'/Dokumen/Dokumen/List'.TPLEXT,
			
		),
        'template_path_stack' => array(
            'tps' => __DIR__ . '/../../../view/'.VIEW_THEMES,
        ),
    ),
);