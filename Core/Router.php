<?php
namespace Core;

class Router
{
    public function handleRequest()
    {
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        if ($uri === '' || $uri === 'home') {
            $controller = new \App\Controller\ViewsController();
            $controller->index();
            return;
        }

        if ($uri === 'productos') {
            $controller = new \App\Controller\ViewsController();
            $controller->productos();
            return;
        }

        if ($uri === 'users') {
            $controller = new \App\Controller\UserController();
            $controller->index();
            return;
        }

        echo "404 - Página no encontrada";
    }
}
