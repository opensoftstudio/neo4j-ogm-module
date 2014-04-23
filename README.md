# Neo4jPHP OGM Module for Zend Framework 2

Intended for use with <a target="_blank" href="https://github.com/lphuberdeau/Neo4j-PHP-OGM">Neo4jPHP Object Graph Mapper</a>, Neo4jOGMModule integrates Neo4jPHP OGM with Zend Framework 2 quickly and easily.

## Quick Start

Install with Composer, see [getcomposer.org](http://getcomposer.org/).  

######composer.json
```json
{
    "require": {
        "php": ">=5.3.3",
        "zendframework/zendframework": "2.3.*",
        "doctrine/doctrine-orm-module": "0.*",
        "everyman/neo4jphp": "dev-master",
        "hirevoice/neo4jphp-ogm": "dev-master",
        "opensoftstudio/neo4j-ogm-module": "dev-master"
    }
}
```

```sh
php composer.phar install
```

Then add `DoctrineModule`, `DoctrineORMModule` and `Neo4jOGMModule` to your `config/application.config.php` and create directory
`data/Neo4jOGMModule/Proxy` and make sure your application has write access to it.

#### Entity Manager settings
To disable proxy regeneration on each request or to use a chached instance of doctrine's annotation reader, add to your `module/config/module.config.php`.  Neo4jOGMModule is deployed with proxy regeneration enabled and annotation reader disabled.

```php
<?php
return array(
    'neo4j' => array(
        'configuration' => array(
            'ogm_default' => array(
                // 'debug' => true, // Force proxy regeneration on each request
                // 'annotation_reader' => false,
            ),
        ),
    ),
);
```
#### Connection settings
Connection parameters to your Neo4j database can be defined in your `config/autoload/local.php` configuration:

```php
<?php
return array(
    'neo4j' => array(
        'connection' => array(
            'ogm_default' => array(
                'params' => array(
                    'transport' => 'curl', // or 'stream'
                    'host' => 'localhost',
                    'port' => 7474,
                    //'username' => null,
                    //'password' => null,
                )
            )
        )
    ),
);
```
#### Service Locator
To access the entity manager, use the main service locator:

```php
$em = $this->getServiceLocator()->get('neo4j.entitymanager.ogm_default');
$em = $this->getServiceLocator()->get('Neo4j\OGM\EntityManager');
```
