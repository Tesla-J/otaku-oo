<?php
class PostDTO{
    private $id;
    private $title;
    private $author;
    private $content;
    private $images;

    public function __construct($id, $title, $author, $content, ...$images){
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->content = $content;
        $this->images = $images;
    }

    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function getContent(){
        return $this->content;
    }

    public function getImages(){
        return $this->images;
    }
}
?>