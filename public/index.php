<?php

namespace Core;

use App\controller\UserController;
use App\controller\ViewsController;

class Router
{
    public function handleRequest()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Enrutamiento básico
        switch ($uri) {
            case '/':
                (new ViewsController())->home();
                break;

            case '/users':
                (new UserController())->index();
                break;

            case '/users/create':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    (new UserController())->store();
                } else {
                    (new UserController())->create();
                }
                break;

            case '/users/edit':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    (new UserController())->update();
                } else {
                    (new UserController())->edit();
                }
                break;

            case '/users/delete':
                (new UserController())->delete();
                break;

            default:
                echo "404 Página no encontrada";
                break;
        }
    }
}
