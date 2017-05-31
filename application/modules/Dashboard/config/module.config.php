<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     DashboardModule
 */

return array(
	
    'controllers' => array(
        'invokables' => array(
            'Dashboard\Controller\Dashboard' => 'Dashboard\Controller\DashboardController',
        ),
    ),

    'router' => array(
        'routes' => array(
            'dashboard' => array(
                'type'    => 'segment',
                'options' => array(
					'route'    => '[/:lang]/dashboard[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Dashboard\Controller\Dashboard',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
		'template_map' => array(
		    'dashboard/dashboard/index' => __DIR__ . '/../../../view/'.VIEW_THEMES.'/Dashboard/Home'.TPLEXT,
		),
        'template_path_stack' => array(
            'dashboard' => __DIR__ . '/../../../view/'.VIEW_THEMES,
        ),
    ),
);