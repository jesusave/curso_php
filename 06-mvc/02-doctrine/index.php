<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

use FastRoute\RouteCollector;

$container = require __DIR__ . "/app/bootstrap.php";

// Load Whoops
require  __DIR__ . "/app/whoops.php";


$dispatcher = FastRoute\simpleDispatcher(function(RouteCollector $router) {
    $router->addRoute('GET', '/', [Application\Controllers\HomeController::class, 'index']);
    $router->addRoute('GET', '/insert', [Application\Controllers\HomeController::class, 'insert']);
    $router->addRoute('GET', '/all', [Application\Controllers\HomeController::class, 'all']);
    $router->addRoute('GET', '/find/{id}', [Application\Controllers\HomeController::class, 'find']);
    $router->addRoute('GET', '/update/{id}', [Application\Controllers\HomeController::class, 'update']);
    $router->addRoute('GET', '/remove/{id}', [Application\Controllers\HomeController::class, 'remove']);
	$router->get('/username/{username}', [Application\Controllers\HomeController::class, 'username']);

	// BLOG
	$router->get('/insert-post/{user_id}', [Application\Controllers\BlogController::class, 'insertPost']);
	$router->get('/user-post/{user_id}', [Application\Controllers\BlogController::class, 'userPost']);

});

$route = $dispatcher->dispatch($_SERVER["REQUEST_METHOD"], $_SERVER["REQUEST_URI"]);

switch($route[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo "404 NOT FOUND";
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo "405 NOT ALLOWED";
        break;
    case FastRoute\Dispatcher::FOUND:
        $controller = $route[1];
        $parameters = $route[2];
        $container->call($controller, $parameters);
        break;
}
