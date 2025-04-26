<?php

return [
    'default' => 'sqlite',
    
    'connections' => [
        'sqlite' => [
            'driver' => 'sqlite',
            'database' => __DIR__ . '/../database.sqlite',
            'prefix' => '',
        ],
        
        'mysql' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'simplecrud',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
        ],
    ],
]; 