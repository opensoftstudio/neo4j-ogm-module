<?php
namespace Neo4jOGMModule\Service;

use HireVoice\Neo4j\Configuration;
use DoctrineModule\Service\AbstractFactory;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Connection ServiceManager factory
 *
 * @license 
 * @link   
 * @author  
 */
class ConnectionFactory extends AbstractFactory
{
    /**
     * @return \Hirevoice\Neo4j\Configuration
     */
    public function createService(ServiceLocatorInterface $sl)
    {
        $options = $this->getOptions($sl, 'connection');

        $params = $options->getParams();

        $connection = new Configuration($params);

        return $connection;
    }

    /**
     * Get the class name of the options associated with this factory.
     *
     * @return string
     */
    public function getOptionsClass()
    {
        return 'Neo4jOGMModule\Options\Connection';
    }
}
