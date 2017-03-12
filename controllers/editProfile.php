<?php
require '../vendor/autoload.php';
require '../core/bootstrap.php';
if(!isLoggedIn()){
  header("location: home.php");
  exit;
}
$user = new User();
$user->id = $_SESSION['userid'];
$user = $user->loadById();

if(isset($_POST['action'])){
    $response["errors"] = [];
    if ($_POST['action'] == 'edit') {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $signature = $_POST['signature'];
        if(!empty($email) && !empty($username) && !empty($fname) && !empty($lname)){

            if($user->email != $email){
                $newUser = User::selectUser('email',$_POST['email']);
                if($newUser->email){
                    $response["errors"][] = "Email already exist!";
                }
            }
            if($user->username != $username){
                $newUser = User::selectUser('username',$_POST['username']);
                if($newUser->username){
                    $response["errors"][] = "Username already exist!";
                }
            }
        }
        else{
             $response["errors"][] = "please, fill all the fields";
        }
        $response["valid"] = count($response["errors"]) ? false : true;
        if($response["valid"] == true){
            $user->lname = $lname; $user->fname = $fname; $user->email = $email; $user->username = $username; $user->signature = $signature; $user->gender=$gender;
            $response["data"]["fname"] = $fname;
            $response["data"]["lname"] = $lname;
            $response["data"]["email"] = $email;
            $response["data"]["username"] = $username;
            $response["data"]["signature"] = $signature;
            $response["data"]["gender"] = $gender;
            $user->update();
        }
    }
    if ($_POST['action'] == 'passwordChange') {
        $old = $_POST['old'];
        $new = $_POST['new'];
        $renew = $_POST['renew'];
        if(!empty($old) && !empty($new) && !empty($renew)){

            if(!password_verify($old,$user->password)){
                  $response["errors"][] = "wrong old password!";
            }
            if($new != $renew){
                  $response["errors"][] = "repassword not matching!";
            }
            if($new == $old){
                  $response["errors"][] = "new password is the same!";
            }
        }
        else{
             $response["errors"][] = "please, fill all the fields";
        }
        $response["valid"] = count($response["errors"]) ? false : true;
        if($response["valid"] == true){
            $user->password = password_hash($new,PASSWORD_BCRYPT);
            $user->update();
        }
    }
    echo json_encode($response);
}
?>
