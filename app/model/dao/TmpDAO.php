<?php

class TmpDAO{
    private $users = array();
    private $currentUserIndex = 0;
    private $posts = array();
    private $currentPostIndex = 0;

    public function addUser($userDTO){
        ++$this->currentUserIndex;
        $this->users[$this->currentUserIndex] = $userDTO;
    }

    public function addPost($postDTO){
        ++$this->currentPostIndex;
        $this->posts[$this->currentPostIndex] = $postDTO;
    }

    public funtion getPosts(){
        return $this->posts;
    }

    public funciton getUsers(){
        return $this->users;
    }
}