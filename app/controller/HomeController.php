<?php

class HomeController extends Controller{
    public function display($id = null){
        require_once __DIR__."/../view/landing_page.php";
    }
}