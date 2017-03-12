<?php
//include 'DBManager.php';
//define("DB_HOST", "localhost");
//define("DB_USER", "yasser");
//define("DB_PASS", "");
//define("DB_NAME", "osddevelopers");
//
//$DB = new DBManager();

/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/4/17
 * Time: 2:36 PM
 */
// $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// return [
//     'database'=>[
//         'name'=>'heroku_eb8c565d31ce2cb',
//         'username'=>'b54dd2bdf3fbad',
//         'password'=>'d6a19bf0',
//         'connection' => 'mysql:host=us-cdbr-iron-east-03.cleardb.net;',
//         'charset' => 'utf8',
//         'collation' => 'utf8_unicode_ci',
//         'options'=>[
//             PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
//         ]
//     ]
// ];

return [
   'database'=>[
       'host'=>'172.30.55.85',
       'name'=>'osddevelopers',
       'username'=>'yasser',
       'password'=>'yasser',
       'connection' => 'mysql:host=172.30.55.85',
       'charset' => 'utf8',
       'collation' => 'utf8_unicode_ci',
       'options'=>[
           PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
       ]
   ]
];
