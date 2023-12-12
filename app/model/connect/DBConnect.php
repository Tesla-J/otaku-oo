<?php
class DBConnect{
    private $manager;

    private static $instance;

    private function __construct(){
        try{
            $this->manager = new MongoDB\Driver\Manager('mongodb://172.17.0.3:27017');
            $stats = new MongoDB\Driver\Command(['dbstats' => 1]);
            $res = $this->manager->executeCommand('otaku-king', $stats);
            $stats = (current($res->toArray()));
            print_r($stats);
        }
        catch (MongoDB\Driver\Exception\Exception $e){
            echo $e->getMessage();
        }
    }

    private function __clone(){}

    //private function __wakeup(){}

    public static function getInstance() : DBConnect{
        if(!isset(self::$instance))
            self::$instance = new static();
        return self::$instance;
    }

    public function getManager() : MongoDB\Driver\Manager{
        return $this->manager;
    }
}