<?php
// app/Core/Router.php
namespace Core;

class Router
{
    public function handleRequest()
    {
        // Siempre cargar ViewsController
        $controllerClass = "App\\Controller\\ViewsController";

        // Verificar si el controlador existe
        if (class_exists($controllerClass)) {
            $controller = new $controllerClass();
            $controller->index(); // Llamar al método index para cargar la vista
        } else {
            echo "Error 404: Página no encontrada.";
        }
    }
}
