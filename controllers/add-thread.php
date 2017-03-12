<?php
/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/11/17
 * Time: 5:16 PM
 */

require '../vendor/autoload.php';
require '../core/bootstrap.php';

$forum_id=$_GET['forum-id'];
$thread_id=$_GET['thread-id'];


require '../views/add-thread.php';