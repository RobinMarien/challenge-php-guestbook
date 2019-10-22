<?php

declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require 'controller/HomeController.php';
require 'model/Post.php';
require 'model/PostLoader.php';

session_start();

function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}


function test_input($data) {
    $data = trim($data); // Strip whitespace (or other characters) from the beginning and end of a string
    $data = htmlspecialchars($data); // Convert special characters to HTML entities ( < = &lt; , ... )
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $alerts = [];

    $title = test_input($_POST["title"]);
    $content = test_input($_POST["content"]);
    $author = test_input($_POST["author"]);

    if (empty($title)) {
        $alerts[] = "Please fill in the <a href='#title' class='alert-link'>Title</a>!";
    }
    if (empty($content)) {
        $alerts[] = "Please fill in your <a href='#content' class='alert-link'>Message</a>!";
    }
    if (empty($author)) {
        $alerts[] = "Please fill in your <a href='#author' class='alert-link'>Name</a>!";
    }
    $date = date('d-m-Y H:i:s');

    //$_POST['date'] = $date;

    // DISPLAY ALERTS
    if (!empty($alerts)){
        foreach ($alerts as $alert){
            echo ("<div class='alert alert-warning' role='alert'>" . $alert . "</div>");
        }
    }
    else {
        $newMessage = new Post($title, $date, $content, $author);

        $newMessage->createPost();;

        /*$json = json_decode(file_get_contents('data/posts.json'), true);

        array_push($json, $newMessage);

        $jsonData = json_encode($json, JSON_PRETTY_PRINT);

        file_put_contents('data/posts.json', $jsonData, FILE_APPEND);*/

    }
}



$controller = new HomeController();
$controller -> render();


