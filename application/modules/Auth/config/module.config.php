<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     AuthModule
 */

return array(
	
    'controllers' => array(
        'invokables' => array(
            'Auth\Controller\Auth' => 'Auth\Controller\AuthController',
        ),
    ),

    'router' => array(
        'routes' => array(
            'auth' => array(
                'type'    => 'segment',
                'options' => array(
					'route'    => '[/:lang]/auth[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Auth\Controller\Auth',
                        'action'     => 'login',
                    ),
                ),
            ),
        ),
    ),
	
    'view_manager' => array(
		'template_map' => array(
		    'auth/auth/login' 		=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Auth/Login'.TPLEXT,
			'auth/auth/lock' 		=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Auth/Lock'.TPLEXT,
			//'auth/auth/register' 	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Auth/Register'.TPLEXT,
		),
        'template_path_stack' => array(
            'auth' => __DIR__ . '/../../../view/'.VIEW_THEMES,
        ),
    ),
	
);