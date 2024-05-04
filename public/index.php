<?php

$path  = '../';
require '../helpers.php';
// require $path .'views/home.view.php';

// require baseBath2('views/home.view.php');

$routes = [
'/'=>'controllers/home.php',
'/listings'=>'controllers/listings/index.php',
'/listings/create'=>'controllers/listings/create.php',
'/listings/create/add'=>'controllers/listings/create.php',
'404'=>'controllers/error/404.php'
];

if (array_key_exists($uri, $routes)){
    require ((basePath($routes[$uri])));
} else {
    require basePath($routes['404']);
}


$uri = $_SERVER['REQUEST_URI'];

// inspectAndDie($uri);

