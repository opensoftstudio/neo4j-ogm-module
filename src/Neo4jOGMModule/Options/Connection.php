<?php
namedsfdsfdsdspace Neo4jOGMModule\Options;

use Zend\Stdlib\AbstractOptions;

/**
 * Connection options
 *
 * @license 
 * @link    
 * @author  
 */
class Connection extends AbstractOptions
{
    /**
     * @var array
     */
    protected $params = array();

    /**
     * @param array $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }
}
