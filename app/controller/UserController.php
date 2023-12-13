<?php
class UserController extends Controller{

    public function __construct(){
        parent::__construct();   
    }

    public function authenticate(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            extract($_POST);
            
            $dao = new UserDAO;
            $user = $dao->findAll(['username' => $username]);

            if(isset($user[0]) && $user[0]->passwordHash == md5($password)){
                $this->renderView("home");
            }else{
                echo 'Wrong login details';
                $this->renderView('signin');
            }
        }
        else
            $this->renderView("signin");
    }

    public function logout(){
        echo "Logging out";
    }

    public function register(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            extract($_POST);

            if($password1 != $password2){
                echo "Passwords don't match";
                return;
            }
            
            $dao = new UserDAO;
            $newUser = new UserDTO(null, $username, $email, md5($password1));
            $dao->insertOne($newUser);

            $this->renderView('signin');
        }else
            $this->renderView('signup');
    }
}