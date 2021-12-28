<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');

define('BASE_URL', 'http://localhost:5000');

use FastRoute\RouteCollector;
$container = require __DIR__ . '/app/bootstrap.php';

// Load Whoops
require  __DIR__ . "/app/whoops.php";

$dispatcher = FastRoute\simpleDispatcher(function (RouteCollector $router)
{
	$router->addRoute('GET', '/', ['Application\Controllers\HomeController', 'index']);
	$router->addRoute('GET', '/home', ['Application\Controllers\HomeController', 'home']);
	$router->addRoute(['GET', 'POST'], '/login', ['Application\Controllers\AuthController', 'login']);
	$router->addRoute(['GET', 'POST'], '/register', ['Application\Controllers\AuthController', 'register']);
	$router->addRoute('POST', '/logout', ['Application\Controllers\AuthController', 'logout']);
});

$route = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

switch ($route[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo '404 Not Found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo '405 Method Not Allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
        $controller = $route[1];
        $parameters = $route[2];

        //cargamos el controlador y el controlador con sus parámetros
        $container->call($controller, $parameters);
        break;
}
