<?php

namespace Neo4jOGMModule\Options;

use Zend\Stdlib\AbstractOptions;

class EntityManager extends AbstractOptions
{

    /**
     * @var string
     */
    protected $connection = 'ogm_default';

    protected $configuration = 'ogm_default';

    /**
     * @param  string $configuration
     * @return self
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * @return string
     * @return self
     */
    public function getConfiguration()
    {
        return 'neo4j.configuration.' . $this->configuration;
    }    


    /**
     * @param  string $connection
     * @return self
     */
    public function setConnection($connection)
    {
        $this->connection = $connection;

        return $this;
    }

    /**
     * @return string
     * @return self
     */
    public function getConnection()
    {
        return 'neo4j.connection.' . $this->connection;
    }
}
