<?php
namespace Core;

class Router
{
    public function handleRequest()
    {
        $url = $_GET['url'] ?? 'home';

        // Si empieza con 'users', usa UserController
        if (strpos($url, 'users') === 0) {
            $controllerClass = 'App\\Controller\\UserController';
        } else {
            // Cualquier otro va a ViewsController
            $controllerClass = 'App\\Controller\\ViewsController';
        }

        // Verifica si la clase existe
        if (class_exists($controllerClass)) {
            $controller = new $controllerClass();
            // Llama al método index por defecto
            if (method_exists($controller, 'index')) {
                $controller->index();
            } else {
                echo "Método index no encontrado.";
            }
        } else {
            echo "Controlador no encontrado: $controllerClass";
        }
    }
}
