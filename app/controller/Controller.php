<?php
class Controller{
    protected $dbManager;
    
    public function __construct(){
        $this->dbManager = DBConnect::getInstance()->getManager();

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