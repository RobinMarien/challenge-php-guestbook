<?php

declare(strict_types=1);
class HomeController
{
    public function render (){

        $loaderPosts = new PostLoader();
        $allPosts = $loaderPosts->loadPosts();

        require 'view/home.php';
    }

}