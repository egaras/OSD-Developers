<?php
/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/4/17
 * Time: 5:39 PM
 */
require 'vendor/autoload.php';
App::bind('config', require 'config.php');
App::bind('database', new QueryBuilder(
    Connection::open(App::get('config')['database'])
));
$db = App::get('database');