<?php
require 'function.php';



$uri= parse_url( $_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' =>'controller/index.php',
    '/create' => 'controller/create.php',
    '/about' => 'controller/about.php',
    '/View' => 'controller/veiw.php',
];

if(array_key_exists($uri, $routes)){
    require $routes[$uri];
}
else{
    require 'controller/404.php';
}