<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@hotmail.com;dartodinus@gmail.com>
 * @contact		+62856-8-260684
 * @package     SmartyModule
 */

return array(

	'alias' => array(
		'view' => 'SmartyModule\View\Renderer\SmartyRenderer',
	),

	'smarty' => array(
		'compile_check' => true,
		'force_compile' => true,
		'caching' => true,
		'force_cache' => false,
		'cache_lifetime' => 0,
		'debugging' => false,
		'escape_html' => false,
		
	),
	
	'view_manager' => array(
		'display_not_found_reason' => true,
		'display_exceptions'       => true,
		'doctype'                  => 'HTML5',
		'defaultSuffix'			   => '.tpl',
		'not_found_template'       => 'error/404',
		'exception_template'       => 'error/index',
		'template_map' => array(
		    'layout/layout'           	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Layout/Layout'.TPLEXT,
			'layout/header'				=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Layout/Header'.TPLEXT,
			'layout/slidebar'			=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Layout/Slidebar'.TPLEXT,
			'layout/footer'				=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Layout/Footer'.TPLEXT,
			'layout/breadcrumbs'		=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Layout/Breadcrumbs'.TPLEXT,
			'layout/layoutcontent'		=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Layout/Layoutcontent'.TPLEXT,
			'layout/layoutmodal'		=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Layout/Layoutmodal'.TPLEXT,
		    'error/404'               	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Error/404'.TPLEXT,
			'error/500'               	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Error/500'.TPLEXT,
		    'error/index'             	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Error/Index'.TPLEXT,
			'auth/register'             => __DIR__ . '/../../../view/'.VIEW_THEMES.'/Auth/Register'.TPLEXT,
		    'application/index/index'	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Application/Home/Home'.TPLEXT,
		),
		'template_path_stack' => array(
		    __DIR__ . '/../../../view/'.VIEW_THEMES,
		),
	),
  
	'di' => array(
	    'instance' => array(
	        'alias' => array(
	            'smarty_engine' => 'Smarty',
	        ),
	
	        'SmartyModule\View\Renderer\SmartyStrategy' => array(
	            'parameters' => array(
	                'smarty' => 'SmartyModule\View\Renderer\SmartyRenderer',
	            ),
	        ),
	        'SmartyModule\View\Renderer\SmartyRenderer' => array(
	            'parameters' => array(
	                'smarty' => 'smarty_engine',
	            ),
	        ),
	
	        'smarty_engine' => array(
	            'parameters' => array(
	                'compile_dir' 	=> SMARTY_COMPILE,
					'cache_dir'		=> SMARTY_CACHE,
	            )
	        )
	    ),
	),
);

