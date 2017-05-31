<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     ServiceModule
 */

return array(
	
    'controllers' => array(
        'invokables' => array(
            'Service\Controller\Service' 	=> 'Service\Controller\ServiceController',
			'Service\Controller\Upload'		=> 'Service\Controller\UploadController',
			'Service\Controller\Restfull' 	=> 'Service\Controller\RestfullController',
			'Service\Controller\RestUser' 	=> 'Service\Controller\RestUserController',
        ),
    ),

    'router' => array(
        'routes' => array(
			/** SERVICE */
            'service' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/service[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Service\Controller\Service',
                        'action'     => 'index',
                    ),
                ),
            ),
			
			/** SERVICE */
            'service/upload' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/upload[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Service\Controller\Upload',
                        'action'     => 'index',
                    ),
                ),
            ),
			
			/** RESFULL */
            'service/restfull' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/restful',
                    'defaults' => array(
						'__NAMESPACE__' => 'Service\Controller',
						'controller'    => 'Restfull',
                    ),
                ),
            ),
			
			/** USER */
            'service/restuser' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/restuser',
                    'defaults' => array(
						'__NAMESPACE__' => 'Service\Controller',
						'controller'    => 'RestUser',
                    ),
                ),
            ),
			
        ),
    ),
	
   'view_manager' => array(
		'strategies' => array(
			'ViewJsonStrategy',
		),
	),


);