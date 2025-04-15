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

        if ($controllerName === 'aboutme') {
            $controller = new \App\Controller\ViewsController();
            $controller->aboutme();
            return;
        }

        if ($controllerName === 'contact') {
            $controller = new \App\Controller\ViewsController();
            $controller->contact();
            return;
        }

        // Controlador de productos
        if ($controllerName === 'product') {
            $controller = new \App\Controller\ProductController();

            if ($param && is_numeric($param)) {
                $controller->show($param); // /product/23
            } elseif ($param === 'edit' && isset($segments[2]) && is_numeric($segments[2])) {
                $controller->edit($segments[2]); // /product/edit/23
            } else {
                $controller->index(); // /product
            }
            return;
        }

        if ($controllerName === 'project') {
            $controller = new \App\Controller\ProjectController();

            if ($param && is_numeric($param)) {
                $controller->show($param); // /project/23
            } elseif ($param === 'edit' && isset($segments[2]) && is_numeric($segments[2])) {
                $controller->edit($segments[2]); // /project/edit/23
            } else {
                $controller->index(); // /project
            }
            return;
        }

        if ($controllerName === 'users') {
            $controller = new \App\Controller\UserController();

            if ($param && is_numeric($param)) {
                $controller->show($param); // /product/23
            } elseif ($param === 'edit' && isset($segments[2]) && is_numeric($segments[2])) {
                $controller->edit($segments[2]); // /product/edit/23
            } else {
                $controller->index(); // /product
            }
            return;
        }
        // Controlador de usuarios
        /*if ($controllerName === 'users') {
            $controller = new \App\Controller\UserController();
            $controller->index();
            return;
        }*/

        echo "404 - Página no encontrada";
    }
}
