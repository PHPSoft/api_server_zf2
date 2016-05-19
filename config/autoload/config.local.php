<?php

return array (
    'db' => array (
        'driver' => 'Pdo',
        'dsn' => 'mysql:dbname=teams_manager;host=localhost',
        'username' => 'root',
        'password' => 'rootdb',
        'driver_options' => array (
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
        ),
    ),
);