<?php    
class TmpDAO{
    private $users;
    private $currentUserIndex;
    private $posts;
    private $currentPostIndex;
    private $mongoClient;

    public function addUser($userDTO){
        $_SESSION['users'][$_SESSION['currentUserIndex']++] = $userDTO;
    }

    public function addPost($postDTO){
        $_SESSION['posts'][$_SESSION['currentPostIndex']++] = $postDTO;
    }

    public function getPosts(){
        return $_SESSION['posts'];
    }

    public function getUsers(){
        return $_SESSION['users'];
    }

    public function getCurrentUserId(){
        return $_SESSION['currentUserIndex'];
    }

    public function getCurrentPostId(){
        return $_SESSION['currentPostIndex'];
    }

    private function __construct(){
        $this->mongoClient = DBConnect::getInstance()->getClient();

        if(session_status() !== PHP_SESSION_ACTIVE)
            session_start();
        
        if(!isset($_SESSION['users'])) $_SESSION['users'] = array();
        if(!isset($_SESSION['currentUserIndex'])) $_SESSION['currentUserIndex'] = 0;
        if(!isset($_SESSION['posts'])) $_SESSION['posts'] = array();
        if(!isset($_SESSION['currentPostIndex'])) $_SESSION['currentPostIndex'] = 0; 
    }
    private static $instance = null;

    public static function getInstance(){
        if(self::$instance == null)
            self::$instance = new self();
        return self::$instance;
    }

}