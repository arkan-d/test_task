<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
'default' => array
(
    'type'       => 'postgresql',
    'connection' => array(
        'dsn'        => 'pgsql:host=localhost;dbname=kohana_test',
        'hostname'   => 'localhost',
        'database'   => 'kohana_test',
        'username'   => 'admin',
        'password'   => 'admin',
        'persistent' => FALSE,
    ),
    'table_prefix' => '',
    'charset'      => 'utf8',
    'caching'      => FALSE,
    'profiling'    => TRUE,
),
);