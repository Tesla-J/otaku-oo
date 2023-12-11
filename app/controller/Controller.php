<?php
class Controller{
    protected $dbClient;
    
    public function __construct(){
        $this->dbClient = DBConnect::getInstance()->getClient();
    }

    public function display($id){

    }

    public function displayAll(){

    }

    public function delete($id){

    }

    public function edit($id){

    }

    public function addNew($dto){

    }
}