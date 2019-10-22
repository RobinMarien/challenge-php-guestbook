<?php

declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require 'controller/HomeController.php';
require 'model/Post.php';
require 'model/PostLoader.php';

$controller = new HomeController();
$controller -> render();
