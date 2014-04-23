<?php

namespace Neo4jOGMModule\Options;

use Zend\Stdlib\AbstractOptions;

/**
 * @link    http://opensoftstudio.com/
 * @author  OpenSoft <opensoft@opensoftstudio.com>
 */
class EntityManager extends AbstractOptions
{

    /**
     * @var string
     */
    protected $connection = 'ogm_default';

    /**
     * @var string
     */
    protected $proxy_dir;

    /**
     * @var boolean
     */
    protected $debug;

    /**
     * @var boolean
     */
    protected $annotation_reader;

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

    /**
     * @param string $proxy_dir
     * @return self
     */
    public function setProxyDir($proxy_dir)
    {
        $this->proxy_dir = $proxy_dir;

        return $this;
    }

    /**
     * @return string
     */
    public function getProxyDir()
    {
        return $this->proxy_dir;
    }

    /**
     * @param boolean $debug
     * @return self
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * @param boolean $annotation_reader
     * @return self
     */
    public function setAnnotationReader($annotation_reader)
    {
        $this->annotation_reader = $annotation_reader;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getAnnotationReader()
    {
        return $this->annotation_reader;
    }
}
