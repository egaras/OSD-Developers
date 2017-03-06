<?php
/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/5/17
 * Time: 10:46 PM
 */
require '../vendor/autoload.php';
require '../core/bootstrap.php';

if(isset($_POST['action'])){
    if($_POST['action'] == 'login'){
        if(isset($_POST['username']) && isset($_POST['password'])) {
            $user = $db->select('users', ['*'], ['username' => $_POST['username']], 'AND');
            if (count($user) > 0) {
                if (password_verify($_POST['password'], $user[0]->password))
                    echo '{"valid":true}';
                else
                    echo '{"valid":false}';
            }else
                echo '{"valid":false}';
        }
    }else if($_POST['action'] == 'register'){
        if(
            isset($_POST['fname']) &&
            isset($_POST['lname']) &&
            isset($_POST['email']) &&
            isset($_POST['username']) &&
            isset($_POST['password']) &&
            isset($_POST['rpassword']) &&
            isset($_POST['tnc'])
        ){
            echo '{"valid":true}';
        }else
            echo '{"valid":false}';
    }
}