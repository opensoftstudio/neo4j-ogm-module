<?php
namespace Neo4jOGMModule;

use Zend\ModuleManager\Feature\ControllerProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\InitProviderInterface;
use Zend\ModuleManager\Feature\DependencyIndicatorInterface;
use Zend\ModuleManager\ModuleManagerInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Loader\StandardAutoloader;
use Zend\EventManager\EventInterface;
use Zend\Stdlib\ArrayUtils;

/**
 * @license 
 * @link    
 * @author 
 */
class Module implements 
    ControllerProviderInterface,
    ConfigProviderInterface,
    InitProviderInterface,
    DependencyIndicatorInterface
{
    public function init(ModuleManagerInterface $manager)
    {
        $events = $manager->getEventManager();
        $events->getSharedManager()->attach('neo4j');
    }

    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }

    public function getModuleDependencies()
    {
        return array('DoctrineModule', 'DoctrineORMModule');
    }
}
