<?php
namespace Core;

class Router
{
    public function handleRequest()
    {
        // Obtener la URI de la solicitud
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Enrutamiento según la URI
        switch ($uri) {
            // Página de inicio (vista estática)
            case '/':
                $controllerClass = "App\\Controller\\ViewsController";
                break;

            // Usuarios (vistas dinámicas)
            case '/users':
                $controllerClass = "App\\Controller\\UserController";
                break;

            // Crear usuario
            case '/users/create':
                $controllerClass = "App\\Controller\\UserController";
                break;

            // Editar usuario
            case '/users/edit':
                $controllerClass = "App\\Controller\\UserController";
                break;

            // Eliminar usuario
            case '/users/delete':
                $controllerClass = "App\\Controller\\UserController";
                break;

            // Página no encontrada
            default:
                echo "404 Página no encontrada";
                return;
        }

        // Verificar si el controlador existe y llamar al método adecuado
        if (class_exists($controllerClass)) {
            $controller = new $controllerClass();
            // Aquí podrías agregar una lógica para llamar a un método específico
            // dependiendo de la acción que se esté ejecutando
            $controller->index(); // Este método debe existir en cada controlador
        } else {
            echo "Router Error 404: Página no encontrada.";
        }
    }
}
