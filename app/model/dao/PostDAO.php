<?php

class PostDAO extends DAO{
    public function __construct(){
        $postsCollection = "posts";
        parent::__construct($postsCollection);
    }
}