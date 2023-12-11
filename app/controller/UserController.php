<?php
class UserController extends Controller{
    private $collection;

    public function __construct(){
        parent::__construct();

        //$this->collection = $this->dbClient->otaku_king->users;    
    }

    public function authenticate(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            extract($_POST);
            
            $dao = TmpDAO::getInstance();
            $users = $dao->getUsers();

            foreach($users as $id => $user){
                if($user->getUsername() == $username && $user->getPasswordHash() == md5($password))
                    header("location: /post");
                echo "Wrong login details!";
            }

            var_dump($users);//header("location: signin");
        }
        else
            require_once __DIR__ . "/../view/signin.php";
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

            $this->dbClient->insertOne([
                "username" => $username,
                "password" => md5($password1),
                "email" => $email
            ]);
            
            $dao = TmpDAO::getInstance();
            $newUser = new UserDTO($dao->getCurrentUserId()+1, $username, $email, md5($password1));
            $dao->addUser($newUser);

            header("location: signin");
        }else
            require_once __DIR__ . "/../view/signup.php";
    }
}