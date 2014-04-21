<?php
namespace Neo4jOGMModule\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Factory that provides the `HireVoice\Neo4j\EntityManager` alias for `neo4j.entitymanager.ogm_default`
 *
 * @license 
 * @link   
 * @author 
 */
class EntityManagerAliasCompatFactory implements FactoryInterface
{
    /**
     * @return \HireVoice\Neo4j\EntityManager
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return $serviceLocator->get('neo4j.entitymanager.ogm_default');
    }
}
