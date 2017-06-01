<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     ApplicationModule
 */

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Segment',
                'options' => array(
                    'route'    => '/[:lang]',
                    'constraints' => array(
                        'lang' => '[a-z]{2}(-[A-Z]{2}){0,1}'
                    ),
                    'defaults' => array(
                        'controller' => 'Auth\Controller\Auth',
                        'action'     => 'login'
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'application' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '[/:lang]/application[/]',
                    'constraints' => array(
                        'lang' => '[a-z]{2}(-[A-Z]{2}){0,1}'
                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route' => '[/[:controller[/[:action]]]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*'
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
	
	'service_manager' => array(
        'factories' => array(
            'translator' => 'Zend\I18n\Translator\TranslatorServiceFactory',
        ),
		
        'services' => array(
            //'session' => new Zend\Session\Container('zf2tutorial'),
			//'error_handler' => 'MyModule\Controller\MyCustomErrorController',
			'session' => 'Zend\Session\Container',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
	
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => 'Application\Controller\IndexController'
        ),
    ),
    'view_manager' => array(

        'template_path_stack' => array(
            __DIR__ . '/../../../view/'.VIEW_THEMES,
        ),
    ),
);
