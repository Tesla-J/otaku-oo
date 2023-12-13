<?php
class PostController extends Controller{
    public function displayAll(){
        $this->renderView("home");
    }

    public function addNew($dto = null){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            extract($_POST);
            
            $dao = new PostDAO;
            $newPost = new PostDTO(null, $title, null, $content, []);
            $dao->insertOne($newPost);

            header("location: /post");
        }
    }
}