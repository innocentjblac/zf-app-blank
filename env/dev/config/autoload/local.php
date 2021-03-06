<?php

/**
 * Local configuration of application.
 */

//use Doctrine\DBAL\Driver\PDOPgSql\Driver as PgSqlDriver;
use Doctrine\DBAL\Driver\PDOMySql\Driver as MySqlDriver;

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
//                'driverClass' => PgSqlDriver::class,
                'driverClass' => MySqlDriver::class,
                'params' => [
                    'host' => '127.0.0.1',
//                    'port' => 5432,
                    'port' => 3306,
                    'user' => 'zf_app_blank',
                    'password' => '1234',
                    'dbname' => 'zf_app_blank' . (APP_ENV_TEST ? '_test' : ''),
                ],
            ],
        ],
    ],
    'ex_assetic' => [
        'node_bin' => '/usr/bin/node',
        'yui_path' => '/usr/lib/node_modules/yuicompressor/build/yuicompressor-2.4.8.jar',
        'java_path' => '/usr/bin/java',
        'uglify_js2_path' => '/usr/bin/uglifyjs',
        'sass_path' => '/usr/local/bin/sass',
    ],
    'mailgun' => [
        'debug' => true,
        'key' => 'key-example', // example key-dfdfh87d765s45ra7s65a4sasdas76253e
        'endpoint' => 'endpoint-example', // example http://bin.mailgun.net/sd7gs4wsd
    ],
    'mail' => [
        'domain' => 'example.mailgun.org',  // example mail.my-site.com
    ],
];
