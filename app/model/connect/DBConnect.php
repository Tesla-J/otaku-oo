<?php
class DBConnect{
    private $client;

    private static $instance;

    private function __construct(){
        $this->client = new MongoDB\Driver\Manager();
    }

    private function __clone(){}

    private function __wakeup(){}

    public static function getInstance() : DBConnect{
        if(!isset(self::$instance))
            self::$instance = new static();
        return self::$instance;
    }

    public function getClient() : MongoDB\Driver\Manager{
        return $this->client;
    }
}