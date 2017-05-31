<?php

/**
'db' => array(	'driver' 		=> 'Pdo',
        			'dsn' 			=> 'mysql:dbname=test;host=localhost',
        			'username' 		=> 'root',
        			'password' 		=> '',
        			'driver_options' => array(
            			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        			),
			),
*/

return array(
    'db' => array(	'driver' 		=> 'Pdo',
        			'dsn' 			=> 'pgsql:host=localhost;port=5432;dbname=titaninfra',
        			'username' 		=> 'devel',
        			'password' 		=> 'devel',
        			
			),
			
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
			'Zend\Cache\Storage\Filesystem' => function($sm){
				$cache = Zend\Cache\StorageFactory::factory(array(
					'adapter' => 'filesystem',
					'plugins' => array(
						'exception_handler' => array('throw_exceptions' => false),
						'serializer'
					)
				));
				
				$cache->setOptions(array(
                	'cache_dir' => DATA_DIR . 'tmp/modulecache/',
					'ttl' => 100,
            	));
				return $cache;
			},
        ),
    ),
);
