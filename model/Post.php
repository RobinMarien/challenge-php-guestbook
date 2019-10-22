<?php


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
}