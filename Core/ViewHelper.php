<?php
namespace Core;

class ViewHelper
{
    public static function render($view, $data = [])
    {
        extract($data); // Extrae variables para usar en la vista

        // Rutas absolutas usando __DIR__ para evitar problemas de rutas relativas
        $viewFile = __DIR__ . "/../app/views/{$view}.php";
        //$header = __DIR__ . "/../app/views/header.php";
        //$footer = __DIR__ . "/../app/views/footer.php";

        if (file_exists($viewFile)) {
            require_once $header;
            require_once $viewFile;
            require_once $footer;
        } else {
            echo "<h1>404 - La vista '$view' no fue encontrada</h1>";
        }
    }
}
