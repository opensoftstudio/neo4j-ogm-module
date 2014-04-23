<?php

namespace Neo4jOGMModule\Options;

use Zend\Stdlib\AbstractOptions;

/**
 * @link    http://opensoftstudio.com/
 * @author  OpenSoft <opensoft@opensoftstudio.com>
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
