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


class SmartyViewResolverFactory implements FactoryInterface
{
    /**
     * Create the aggregate view resolver
     *
     * Creates a Zend\View\Resolver\AggregateResolver and attaches the template
     * map resolver and path stack resolver
     *
     * @param  ServiceLocatorInterface $serviceLocator
     * @return ViewResolver\AggregateResolver
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $resolver = new ViewResolver\AggregateResolver();
        $resolver->attach($serviceLocator->get('SmartyViewTemplateMapResolver'));
        $resolver->attach($serviceLocator->get('SmartyViewTemplatePathStack'));
        return $resolver;
    }
}
