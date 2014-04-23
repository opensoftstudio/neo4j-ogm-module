<?php

namespace Neo4jOGMModule\Service;

use HireVoice\Neo4j\EntityManager;
use Neo4jOGMModule\Service\AbstractFactory;
use Zend\ServiceManager\ServiceLocatorInterface;

use Doctrine\Common\Annotation\AnnotationReader;

/**
 * @link    http://opensoftstudio.com/
 * @author  OpenSoft <opensoft@opensoftstudio.com>
 */
class EntityManagerFactory extends AbstractFactory
{
    /**
     * @return EntityManager
     */
    public function createService(ServiceLocatorInterface $sl)
    {
        $options    = $this->getOptions($sl, 'entitymanager');
        $connection = $sl->get($options->getConnection());
        $proxyDir = $options->getProxyDir();
        $debug = $options->getDebug();
        $annotation_reader = $options->getAnnotationReader();

        $connection->setProxyFactory($proxyDir, $debug);

        if($annotation_reader){
            $connection->setMetaRepository(new AnnotationReader());
        }else{
            
        }

        return new EntityManager($connection);
    }

    /**
     * @return string
     */
    public function getOptionsClass()
    {
        return 'Neo4jOGMModule\Options\EntityManager';
    }
}
