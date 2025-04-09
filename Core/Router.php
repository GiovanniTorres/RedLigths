<?php
namespace Core;

class Router
{
    public function handleRequest()
    {
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        $segments = explode('/', $uri);

        $controllerName = $segments[0] ?? 'home';
        $param = $segments[1] ?? null;

        if ($controllerName === '' || $controllerName === 'home') {
            $controller = new \App\Controller\ViewsController();
            $controller->index();
            return;
        }

        if ($controllerName === 'product') {
            $controller = new \App\Controller\ViewsController();
            if ($param) {
                $controller->product($param);
            } else {
                $controller->product(); // sin ID
            }
            return;
        }

        if ($controllerName === 'users') {
            $controller = new \App\Controller\UserController();
            $controller->index();
            return;
        }

        echo "404 - Página no encontrada";
    }
}
