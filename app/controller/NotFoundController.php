<?php

class NotFoundController extends Controller{
    public function display($id = null){
        $this->renderView("404");
    }
}