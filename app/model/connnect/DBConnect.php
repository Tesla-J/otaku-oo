<?php
class DBConnect{
    private $user;
    private $password;
    private $server;
    private $port;

    private static $instance = null;

    private function __construct(){}

    public static function getInstance(){
        if(DBConnect::$instance == null)
            DBConnect::$instance = new DBConnect();
        return DBConnect::$instance;
    }

    public function closeConnection(){
        DBConnect::$instance = null;
    }

    public function __destruct(){
        $this->closeConnection();
    }
}