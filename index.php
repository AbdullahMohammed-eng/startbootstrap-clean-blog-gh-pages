<?php

$request_uri = $_SERVER['REQUEST_URI'];
$base_path = '/startbootstrap-clean-blog-gh-pages'; 

$path = str_replace($base_path, '', $request_uri);
$path = parse_url($path, PHP_URL_PATH);

switch ($path) {
    case '':
    case '/':
    case '/index.php':
        require_once 'views/home.php';
        break;

    case '/about':
    case '/about.php':
        require_once 'views/about.php';
        break;

    case '/contact':
    case '/contact.php':
        require_once 'views/contact.php';
        break;

    case '/post':
    case '/post.php':
        require_once 'views/post.php';
        break;

    default:
        echo "<h1>404 - Page Not Found</h1>";
        break;
}