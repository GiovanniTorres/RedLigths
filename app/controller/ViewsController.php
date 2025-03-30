<?php
namespace App\Controller;

class ViewsController
{
    public function view($view)
    {
        $file = __DIR__ . "/../app/views/{$view}.php";
        
        if (file_exists($file)) {
            require_once __DIR__ . '/../app/views/header.php';
            require_once $file;
            require_once __DIR__ . '/../app/views/footer.php';
        } else {
            echo "Error 404: Vista no encontrada.";
        }
    }
}
