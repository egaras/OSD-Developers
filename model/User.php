<?php
    class User
    {
        private $id;
        private $roleid;
        private $fname;
        private $lname;
        private $username;
        private $status;
        private $email;
        private $password;
        private $signature;
        private $avatar;
        private $userData;
        private $DB;
        public static $table = 'users';
        
        function __construct(){
            $this->DB = $GLOBALS['db'];
        }       
        function __get($name){
            return $this->$name;
        }
        function __set ($name, $value){
            $this->$name = $value;
        }
        public static function validateUserLogin($username,$password){
            $errorsArray = array();
            $userData = $DB->select(user::table,['*'],['username' => $username])[0];
            if(empty($userData)){
                $errorsArray[] = 'this username is not exist';
            }
            else{
                if($password != $userData['password']){
                    $errorsArray[] = 'wrong password';
                }
            }
            return $errorsArray;
        }
        public static function login($username){
            $user = new user();
            $user->userData = $DB->select(user::table,['*'],['username' => $username])[0];
            $user->setUserData();
            return $user;
        }
        public static function validateUserRegister($username,$email){
            $errorsArray = array();
            $userData = $DB->select(user::table,['username'],['username' => $username])[0];
            if(!empty($userData)){
                $errorsArray[] = 'this username is exist';
            }
            $userData = $DB->select(user::table,['email'],['email' => $username])[0];
            if(!empty($userData)){
                $errorsArray[] = 'this email is exist';
            }
            return $errorsArray;
        }
        public static function register($data){
            $user = new user();
            $DB->insert(user::table,$data);
            $user->setUserData();
            return $user;
        }
        function getFullname(){
            return $this->fname." ".$this->lname;
        }
        function setUserData(){
            $this->roleid = $this->$mydata['roleid'];
            $this->fname = $this->$mydata['fname'];
            $this->lname = $this->$mydata['lname'];
            $this->username = $this->$mydata['username'];
            $this->status = $this->$mydata['status'];
            $this->email = $this->$mydata['email'];
            $this->password = $this->$mydata['password'];
            $this->sugnature = $this->$mydata['sugnature'];
        }
        
    }