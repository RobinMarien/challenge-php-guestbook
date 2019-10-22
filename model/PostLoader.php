<?php

declare(strict_types=1);
class PostLoader
{
    public function loadPosts() : array {
        $list = [];
        $json = json_decode(file_get_contents('data/posts.json'), true);
        foreach ($json AS $postJson){
            $list[] = new Post($postJson['title'], $postJson['date'], $postJson['content'], $postJson['author']);
        }

        $reverseList = array_reverse($list);
        return $reverseList;
    }
}