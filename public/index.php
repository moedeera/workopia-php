<?php

$path  = '../';
require '../helpers.php';
// require $path .'views/home.view.php';

// require baseBath2('views/home.view.php');


require basePath('Router.php');

$router  = new Router();

$routes = require basePath('routes.php');

$uri = $_SERVER['REQUEST_URI'];
$method =$_SERVER['REQUEST_METHOD'];

$router->route($uri,$method);

// inspect($uri);
// inspect($method);




// inspectAndDie($uri);

