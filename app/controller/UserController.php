<?php
class UserController{
    public function authenticate(){
        require_once __DIR__ . "/../view/signin.php";
    }

    public function logout(){
        echo "Logging out";
    }

    public function register(){
        require_once __DIR__ . "/../view/signup.php";
    }
}