<?php
class PostController extends Controller{
    public function displayAll(){
        $this->renderView("home");
    }

    public function addNew($dto = null){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            extract($_POST);
            
            $dao = TmpDAO::getInstance();
            $newPost = new PostDTO($dao->getCurrentPostId()+1, $title, null, $content, []);
            $dao->addPost($newPost);

            header("location: /post");
        }
    }
}