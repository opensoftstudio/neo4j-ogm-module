<?php

namespace Neo4jOGMModule\Service;

use Zend\ServiceManager\ServiceLocatorInterface;

use Neo4jOGMModule\Service\AbstractFactory;
use Neo4jOGMModule\Neo4j\Configuration;

/**
 * @link    http://opensoftstudio.com/
 * @author  OpenSoft <opensoft@opensoftstudio.com>
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
     * @return string
     */
    public function getOptionsClass()
    {
        return 'Neo4jOGMModule\Options\Connection';
    }
}
