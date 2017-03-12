<?php
//include 'DBManager.php';
//define("DB_HOST", "localhost");
//define("DB_USER", "yasser");
//define("DB_PASS", "");
//define("DB_NAME", "osddevelopers");
//
//$DB = new DBManager();


// return [
//    'database'=>[
//        'host'=>'172.30.55.85',
//        'name'=>'osddevelopers',
//        'username'=>'yasser',
//        'password'=>'yasser',
//        'connection' => 'mysql:host=172.30.55.85',
//        'charset' => 'utf8',
//        'collation' => 'utf8_unicode_ci',
//        'options'=>[
//            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
//        ]
//    ]
// ];

return [
   'database'=>[
       'host'=>'localhost',
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
