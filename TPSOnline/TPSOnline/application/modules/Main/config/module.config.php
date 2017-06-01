<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     MainModule
 */

return array(
	
    'controllers' => array(
        'invokables' => array(
            'Main\Controller\Main' => 'Main\Controller\MainController',
        ),
    ),

    'router' => array(
        'routes' => array(
            'main' => array(
                'type'    => 'segment',
                'options' => array(
					'route'    => '[/:lang]/main[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Main\Controller\Main',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
		'template_map' => array(
		    'main/main/index' => __DIR__ . '/../../../view/'.VIEW_THEMES.'/Main/Home'.TPLEXT,
		),
        'template_path_stack' => array(
            'main' => __DIR__ . '/../../../view/'.VIEW_THEMES,
        ),
    ),
);