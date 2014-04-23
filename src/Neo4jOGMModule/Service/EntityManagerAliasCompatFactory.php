<?php

namespace Neo4jOGMModule\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * @link    http://opensoftstudio.com/
 * @author  OpenSoft <opensoft@opensoftstudio.com>
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
