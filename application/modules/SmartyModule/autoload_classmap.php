<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@hotmail.com>
 * @package     SmartyModule
 */

return array(
    'Smarty' 	=> SYSTEM_PATH . '/vendor/Smarty/libs/Smarty.class.php',
    'SmartyBC' 	=> SYSTEM_PATH . '/vendor/Smarty/libs/SmartyBC.class.php',
    'SmartyModule\View\Renderer\SmartyRenderer' => __DIR__ . '/src/SmartyModule/View/Renderer/SmartyRenderer.php',
    'SmartyModule\View\Strategy\SmartyStrategy' => __DIR__ . '/src/SmartyModule/View/Strategy/SmartyStrategy.php',
	'SmartyModule\Service\ViewTemplatePathStackFactory' => __DIR__ . 
		'/src/SmartyModule/Service/ViewTemplatePathStackFactory.php',
    'SmartyModule\Module' => __DIR__ . '/Module.php',
	//'SmartyModule\Service\SmartyPlugins' => __DIR__ . '/src/SmartyModule/Service/SmartyPlugins.php',
);