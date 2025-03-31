<?php

namespace App\Controller;

class ViewsController
{
    public function index()
    {
        // Obtener la vista de la URL, ahora con el parámetro 'views'
        $view = $_GET['views'] ?? 'home'; // Por defecto 'home'

        // Verificar si la vista existe y cargarla
        $this->loadView($view);
    }

    private function loadView($view)
    {
        $views = ['home', 'services', 'about', 'contact', 'products']; // Vistas permitidas

        if (in_array($view, $views)) {
            require_once '../app/views/header.php';
            require_once "../app/views/{$view}.php"; // Cargar la vista
            require_once '../app/views/footer.php';
        } else {
            echo "<h1>404 - Página no encontrada</h1>"; // Si la vista no existe
        }
    }
}
