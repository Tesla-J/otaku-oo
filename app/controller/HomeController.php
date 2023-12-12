<?php

class HomeController extends Controller{
    public function display($id = null){
       $this->renderView("landing_page");
    }
}