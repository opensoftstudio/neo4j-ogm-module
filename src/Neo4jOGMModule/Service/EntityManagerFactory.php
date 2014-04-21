<?php
namespace Neo4jOGMModule\Service;

use HireVoice\Neo4j\EntityManager;
use DoctrineModule\Service\AbstractFactory;
use Zend\ServiceManager\ServiceLocatorInterface;

use Doctrine\Common\Annotation\AnnotationReader;

class EntityManagerFactory extends AbstractFactory
{
    /**
     * @return EntityManager
     */
    public function createService(ServiceLocatorInterface $sl)
    {
        $options    = $this->getOptions($sl, 'entitymanager');
        $connection = $sl->get($options->getConnection());
        $configuration = $sl->get($options->getConfiguration());

        if($configuration['annotation_reader'] !== false){
            $configuration['annotation_reader'] = new AnnotationReader();
        }

        return new EntityManager(array_merge($connection, $configuration));
    }

    /**
     * Get the class name of the options associated with this factory.
     *
     * @return string
     */
    public function getOptionsClass()
    {
        return 'Neo4jOGMModule\Options\EntityManager';
    }
}
