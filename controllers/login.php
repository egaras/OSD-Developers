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
    $response = [];

    if($_POST['action'] == 'login'){
        if(isset($_POST['username']) && isset($_POST['password'])) {
            $user = $db->select('users', ['*'], ['username' => $_POST['username']], 'AND');
            if (count($user) > 0) {
                if (!password_verify($_POST['password'], $user[0]->password))
                    $response["errors"]["password"] = "Invalid password";
                else{
                    //code here
                    $to      = 'ehab.g.sh@gmail.com'; // Send email to our user
                    $subject = 'Signup | Verification'; // Give the email a subject
                    $message = '
 
                        Thanks for signing up!
                        Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
                        ------------------------
                        Username: name
                        Password: password
                        ------------------------
 
                        Please click this link to activate your account:
                        http://www.yourwebsite.com/verify.php?email=123
 
                        '; // Our message above including the link

                    $headers = 'From:ehab.gamal.sh@gmail.com' . "\r\n"; // Set from headers
                    mail($to, $subject, $message, $headers); // Send our email
                    header("Location: ../index.php");
                }
            }else
                $response["errors"]["username"] = "Invalid username";
        }
    }else if($_POST['action'] == 'register'){
        if(empty($_POST['fname']))
            $response["errors"]["fname"] = "Empty first name not allowd!";
        if(empty($_POST['lname']))
            $response["errors"]["lname"] = "Empty last name not allowd!";
        if(empty($_POST['email']))
            $response["errors"]["email"] = "Empty email not allowd!";
        if(empty($_POST['username']))
            $response["errors"]["username"] = "Empty username not allowd!";
        if(empty($_POST['password']))
            $response["errors"]["password"] = "Empty password not allowd!";
        if(empty($_POST['rpassword']))
            $response["errors"]["rpassword"] = "Empty rpassword not allowd!";

        if(count(@$response["errors"])==0){
            $user = $db->select('users',['*'],["username"=>$_POST['username'],"email"=>$_POST['email']],"OR ");
            if(count($user) != 0){
                if($user[0]->username == $_POST['username'])
                    $response["errors"]["username"] = "Username already existed!";
                if($user[0]->email == $_POST['email'])
                    $response["errors"]["email"] = "Email already existed!";
            }
        }
    }
    $response["valid"] = count($response["errors"]) ? false : true;
    echo json_encode($response);
}