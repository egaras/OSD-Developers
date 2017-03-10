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
        //private $userData;
        //private $db;
        public static $table = 'users';

        function __construct(){

        }

        function __get($name){
            return $this->$name;
        }
        function __set ($name, $value){
            $this->$name = $value;
        }
        public static function validateUserLogin($username,$password){
            $errorsArray = array();
            $userTest = $GLOBALS['db']->select(self::$table,['*'],['username' => $username])[0];
            if(empty($userTest)){
                $errorsArray[] = 'this username is not exist';
            }
            else{
                if($password != $userTest['password']){
                    $errorsArray[] = 'wrong password';
                }
            }
            if (empty($errorsArray)){
              return true;
            }
            else{
              return false;
            }
        }
        public static function login($username){
            $user = new User();
            $user->username = $username;
            $user = $user->loadByUsername();
            return $user;
        }
        public static function validateUserRegister($username,$email){
            $errorsArray = array();
            $userTest = $GLOBALS['db']->select(self::$table,['username'],['username' => $username])[0];
            if(!empty($userTest)){
                $errorsArray[] = 'this username is exist';
            }
            $userTest = $GLOBALS['db']->select(self::$table,['email'],['email' => $username])[0];
            if(!empty($userData)){
                $errorsArray[] = 'this email is exist';
            }
            return $errorsArray;
        }
        public static function register($data){

        }
        function getFullname(){
            return $this->fname." ".$this->lname;
        }
        public static function getUserameById($id){
            return $GLOBALS['db']->select(self::$table,['username'],['id'=>$id])[0]->username;
        }
        public function loadById(){
            $user = $GLOBALS['db']->select(self::$table,['*'],['id'=>$this->id],"AND",'User')[0];
            return $user;
        }
        public function loadByUsername(){
            $user = $GLOBALS['db']->select(self::$table,['*'],['username'=>$this->username],"AND","User")[0];
            return $user;
        }
        public function insert(){
            $values = array('roleid'=>$this->roleid,'fname'=>$this->fname,'lname'=>$this->lname,'email'=>$this->email,'password'=>$this->password,'username'=>$this->username,'status'=>$this->status,'signature'=>$this->signature,'avatar'=>$this->avatar);
            $GLOBALS['db']->insert(self::$table,$values);
        }
        public function delete(){
            $GLOBALS['db']->delete(self::$table,['id'=>$this->id]);
        }
        public function update(){
            $sets = array('roleid'=>$this->roleid,'fname'=>$this->fname,'lname'=>$this->lname,'email'=>$this->email,'password'=>$this->password,'username'=>$this->username,'status'=>$this->status,'signature'=>$this->signature,'avatar'=>$this->avatar);
            $GLOBALS['db']->update(self::$table,$sets,['id'=>$this->id]);
        }
        public static function getAllUsers(){
            $users = $GLOBALS['db']->select(self::$table,['*'],["1"=>"1"],"AND","User");
            return $users;
        }
        public static function selectUser($field,$value){
            $user = $GLOBALS['db']->select(self::$table,['*'],[$field=>$value],"AND","User");
            if($user){
              return $user[0];
            }
            else{
              return new User();
            }
        }
    }
