<?php

use Core\Response;

$routes = include base_path("routes.php");

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        include base_path($routes[$uri]);
    } else {
        abort();
    }
}

function abort($code = Response::NOT_FOUND)
{
    http_response_code($code);
    include base_path("views/{$code}.php");
    die();
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($uri, $routes);
