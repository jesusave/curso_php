<?php

    /** 
        Puede correr un servidor con el comendo 
        php -S localhost:8000
    */

    require "vendor/autoload.php";

    $dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $route) {
        $route->addRoute("GET", "/users", "getAllUsers");
        $route->addRoute("GET", "/user/{id:\d+}", "getUser");
        $route->addRoute("GET", "/post/{title}", "getPostByTitle");
    });

    $httpMethod = $_SERVER["REQUEST_METHOD"];
    $uri = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

    $routeInfo = $dispatcher->dispatch($httpMethod, $uri);

    switch($routeInfo[0]){
        case FastRoute\Dispatcher::NOT_FOUND:
            echo "Ruta no encontrada";
            break;
        case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
            echo "Ruta no permitida";
            break;
        case FastRoute\Dispatcher::FOUND:
            $handler = $routeInfo[1];
            $params = $routeInfo[2];
            call_user_func($handler, $params);
            break;
    }

    function getAllUsers(array $params = []){
        echo "Obtener todos los usuarios <br>";
        var_dump($params);
    }

    function getUser(array $params = []){
        echo "Obtener un usuario por el ID {$params['id']} <br>";
    }

    function getPostByTitle(array $params = []){
        echo "Obtener un post por el nombre {$params['title']} <br>";
    }