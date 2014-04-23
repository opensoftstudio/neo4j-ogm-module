<?php 

namespace Neo4jOGMModule\Neo4j;

use HireVoice\Neo4j\Configuration as HireVoiceConfiguration;
use HireVoice\Neo4j\Meta\Repository;
use HireVoice\Neo4j\Proxy\Factory;

/**
 * @link    http://opensoftstudio.com/
 * @author  OpenSoft <opensoft@opensoftstudio.com>
 */
class Configuration extends HireVoiceConfiguration
{
    function setMetaRepository($annotationReader = null)
    {
        $this->annotationReader = new Repository($annotationReader);
    }

    function setProxyFactory($proxyDir = null, $debug = null)
    {
    	$this->proxyDir = $proxyDir;
    	$this->debug = $debug;
    }
}