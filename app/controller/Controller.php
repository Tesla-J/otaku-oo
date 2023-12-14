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

    # $viewName : view name without extension
    public function renderView($viewName, $args = array(), $hasHeader=true){
        if($hasHeader)
            $this->renderView('header', [], false);
        require_once __DIR__ . "/../view/$viewName.php";
    }
}