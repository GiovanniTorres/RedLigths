<?php
namespace Core;

class Router {
    public function handleRequest() {
        $url = $_GET['url'] ?? 'home';

        // Convertir la URL en nombre de controlador
        $controllerName = "ViewsController"; // Usamos un único controlador
        $controllerClass = "app\\controller\\" . $controllerName;

        // Verificar si el controlador existe
        if (class_exists($controllerClass)) {
            $controller = new $controllerClass();
            $controller->view($url);
        } else {
            echo "Router.php Error 404: Página no encontrada.";
        }
    }
}
