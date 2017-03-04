<?php
/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/4/17
 * Time: 2:36 PM
 */
return [
    'database'=>[
        'host'=>'172.0.0.1',
        'name'=>'osddevelopers',
        'username'=>'root',
        'password'=>'root',
        'connection' => 'mysql:host=127.0.0.1',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'options'=>[
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
        ]
    ]
];