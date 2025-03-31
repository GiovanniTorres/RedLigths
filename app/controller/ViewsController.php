<?php
namespace App\Controller;

class ViewsController
{
    public function view($view)
    {
$file = __DIR__ . '/../views/' . $view . '.php';
        
        if (file_exists($file)) {
            require_once __DIR__ . '/../views/header.php';
            require_once $file;
            require_once __DIR__ . '/../views/footer.php';
        } else {
            echo "Error 404: Vista no encontrada.";
        }
    }
}
