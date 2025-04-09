<?php
namespace Core;

class ViewHelper
{
    public static function render($view, $data = [])
    {
        extract($data); // Extrae variables para usar en la vista

        $viewFile = "../app/views/{$view}.php";
        $header = "../app/views/header.php";
        $footer = "../app/views/footer.php";

        if (file_exists($viewFile)) {
            require_once $header;
            require_once $viewFile;
            require_once $footer;
        } else {
            echo "<h1>404 - La vista '$view' no fue encontrada</h1>";
        }
    }
}
