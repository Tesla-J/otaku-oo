<?php

class NotFoundController extends Controller{
    public function display($id = null){
        require_once __DIR__ . "/../view/404.php";
    }
}