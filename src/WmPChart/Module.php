<?php

namespace WmPChart;

/**
 * Class WmPChart\Module
 * @package WmPChart
 * @author Georgy Bazhukov <bugov@webmotor.ru>
 * @copyright 2013 (c) WebMotor
 */
class Module
{

    /**
     * @return mixed
     */
    public function getConfig()
    {
        return include $this->getDir() . '/../../config/module.config.php';
    }

    /**
     * @return string
     */
    public function getDir()
    {
        return __DIR__;
    }

    /**
     * @return string
     */
    public function getNamespace()
    {
        return __NAMESPACE__;
    }

    /**
     * 
     * @return array \Zend\Loader\StandardAutoloaderInterface
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__,
                ),
            ),
            'Zend\Loader\ClassMapAutoloader' => array(
                dirname(dirname(__DIR__)) . '/autoload_classmap.php',
            ),
        );
    }

    /**
     * @return array
     */
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
//                'cache' => function ($sm) {
//                    $config = $sm->get('Config');
//                    $cache = new Service($config['cache']);
//                    return $cache;
//                }
            )
        );
    }

}
