<?php

declare(strict_types=1);
class Post
{
    private $title;
    private $date;
    private $content;
    private $author;

    public function __construct(string $_title, string $_date, string $_content, string $_author)
    {
        $this->title = $_title;
        $this->date = $_date;
        $this->content = $_content;
        $this->author = $_author;
    }

    public function getTitle() : string {
        return $this -> title;
    }

    public function getDate() : string {
        return $this -> date;
    }

    public function getContent() : string {
        return $this -> content;
    }

    public function getAuthor() : string {
        return $this -> author;
    }

    public function createPost()
    {
        $postArray = array(
            'title' => $this->title,
            'date' => $this->date,
            'content' => $this->content,
            'author' => $this->author
        );
        $jsonData = file_get_contents('data/posts.json');
        $jsonArray = json_decode($jsonData, true);
        array_push($jsonArray, $postArray);
        $jsonData = json_encode($jsonArray, JSON_PRETTY_PRINT);
        if (file_put_contents('data/posts.json', $jsonData)) {
            echo 'Data successfully saved';
        } else
            echo "error";
    }
}