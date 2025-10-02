<?php
    session_start();
    require_once __DIR__. "/./router.php";

    $url = $_SERVER['REQUEST_URI'];
    $segments = explode('/', trim($url, "/"));
    $actual = $segments[0];
    

    $router = new Router($url, $segments);
    $router->dispatch();
    $router->redirect();
    ?>