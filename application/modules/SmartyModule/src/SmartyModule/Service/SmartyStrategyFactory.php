<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@hotmail.com;dartodinus@gmail.com>
 * @contact		+62856-8-260684
 * @package     SmartyModule
 */

namespace SmartyModule\Service;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;
use SmartyModule\View\Strategy\SmartyStrategy;


class SmartyStrategyFactory implements  FactoryInterface {

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return SmartyStrategy
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $smartyRenderer = $serviceLocator->get('SmartyRenderer');
        $smartyStrategy = new SmartyStrategy($smartyRenderer);
        return $smartyStrategy;
    }
}
