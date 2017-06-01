<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     DispatchModule
 */

return array(
	
    'controllers' => array(
        'invokables' => array(
            'Dispatch\Controller\Eseal'  	=> 'Dispatch\Controller\EsealController',
        ),
    ),

    'router' => array(
        'routes' => array(
            /** ESEAL */
            'dispatch/eseal' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/dispatch/eseal[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Dispatch\Controller\Eseal',
                        'action'     => 'list',
                    ),
                ),
            ),
			
        ),
    ),
	 

    'view_manager' => array(
		'template_map' => array(

            /** ESEAL */
		    'dispatch/eseal/list' 	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Dispatch/Dispatch/Eseal/List'.TPLEXT,
			
		),
        'template_path_stack' => array(
            'dispatch' => __DIR__ . '/../../../view/'.VIEW_THEMES,
        ),
    ),
);