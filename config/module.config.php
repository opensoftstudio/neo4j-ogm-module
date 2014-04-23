<?php
return array(
    'neo4j' => array(
        'connection' => array(
            'ogm_default' => array(
                'params' => array(
                    'transport' => 'curl', // or 'stream'
                    'host' => 'localhost',
                    'port' => '7474',
                    'username' => 'username',
                    'password' => 'password',
                )
            ),
        ),
        'entitymanager' => array(
            'ogm_default' => array(
                'connection' => 'ogm_default',
                'proxy_dir'         => 'data/Neo4jOGMModule/Proxy',
                'debug' => true, // Force proxy regeneration on each request
                'annotation_reader' => false, // Should be a cached instance of the doctrine annotation reader in production
            )
        ),
    ),
   'service_manager' => array(
        'factories' => array(
            'Neo4j\OGM\EntityManager' => 'Neo4jOGMModule\Service\EntityManagerAliasCompatFactory',
        ),
        'abstract_factories' => array(
            'Neo4jOGMModule' => 'Neo4jOGMModule\ServiceFactory\AbstractNeo4jServiceFactory',
        ),
    ),
    'neo4j_factories' => array(
        'connection' => 'Neo4jOGMModule\Service\ConnectionFactory',
        'entitymanager' => 'Neo4jOGMModule\Service\EntityManagerFactory',
    ),
);
