<?php
class PostDTO implements DTO{
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

    public function toArray() : array{
        return [
            '_id' => $this->id,
            'title' => $this->title,
            'author' => $this->author,
            'content' => $this->content,
            'images' => $this->images
        ];
    }

    public static function parseArray(array $data) : array{
        $index = 0;
        $dtoArray = [];

        foreach($data as $row){
            $dtoArray[$index++] = new self(
                $data['id'],
                $data['title'],
                $data['author'],
                $data['content'],
                $data['images']
            );
        }

        return $dtoArray;
    }
}
?>