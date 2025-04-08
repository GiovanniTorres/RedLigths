<?php

namespace Core;
class Router
{
    // Método para manejar las solicitudes
    public function handleRequest()
    {
        // Obtener la URI de la solicitud desde el parámetro 'url'
        $uri = isset($_GET['url']) ? $_GET['url'] : '/';
        print $uri ;

        // Definir las rutas y sus controladores/métodos
        $routes = [
            '/' => ['controller' => 'App\\Controller\\UserController', 'action' => 'index'],
            '/users' => ['controller' => 'App\\Controller\\UserController', 'action' => 'index'],
            '/users/create' => ['controller' => 'App\\Controller\\UserController', 'action' => 'create'],
            '/users/edit' => ['controller' => 'App\\Controller\\UserController', 'action' => 'edit'],
            '/users/delete' => ['controller' => 'App\\Controller\\UserController', 'action' => 'delete'],
        ];
        
        // Verificar si la URI coincide con alguna ruta definida
        if (isset($routes[$uri])) {
            print "[Router]" . $controllerClass = $routes[$uri]['controller'];
            print "[Router2]" . $action = $routes[$uri]['action'];

            // Verificar si el controlador existe
            if (class_exists($controllerClass)) {
                $controller = new $controllerClass();

                // Verificar si el método de la acción existe en el controlador
                if (method_exists($controller, $action)) {
                    $controller->$action(); // Llamar al método correspondiente
                } else {
                    echo "Método no encontrado: $action en $controllerClass";
                }
            } else {
                echo "Controlador no encontrado: $controllerClass";
            }
        } else {
            echo "404 Página no encontrada";
        }
    }
}
