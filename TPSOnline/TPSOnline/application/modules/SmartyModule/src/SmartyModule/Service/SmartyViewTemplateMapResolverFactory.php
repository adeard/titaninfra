<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@hotmail.com;dartodinus@gmail.com>
 * @contact		+62856-8-260684
 * @package     SmartyModule
 */

namespace SmartyModule\Service;

use Zend\View\Resolver as ViewResolver;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;


class SmartyViewTemplateMapResolverFactory implements FactoryInterface
{

    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config');
        $map = array();
        if (is_array($config) && isset($config['view_manager'])) {
            $config = $config['view_manager'];
            if (is_array($config) && isset($config['template_map'])) {
                $map = $config['template_map'];
            }
        }
        return new ViewResolver\TemplateMapResolver($map);
    }
}
