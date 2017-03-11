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
        $signature = $_POST['signature'];
        if(!empty($email) && !empty($username) && !empty($fname) && !empty($lname) && !empty($signature)){

            if($user->email != $email){
                $newUser = User::selectUser('email',$_POST['email']);
                if($newUser->email){
                    $response["errors"]["email"] = "Email already exist!";
                }
            }
            if($user->username != $username){
                $newUser = User::selectUser('username',$_POST['username']);
                if($newUser->username){
                    $response["errors"]["username"] = "Username already exist!";
                }
            }
        }
        else{
             $response["errors"]["missing"] = "please, fill all the fields";
        }
        $response["valid"] = count($response["errors"]) ? false : true;
        if($response["valid"] == true){
            $user->lname = $lname; $user->fname = $fname; $user->email = $email; $user->username = $username; $user->signature = $signature;
            $response["data"]["fname"] = $fname;
            $response["data"]["lname"] = $lname;
            $response["data"]["email"] = $email;
            $response["data"]["username"] = $username;
            $response["data"]["signature"] = $signature;
            $user->update();
        }
    }
    echo json_encode($response);
}
?>
