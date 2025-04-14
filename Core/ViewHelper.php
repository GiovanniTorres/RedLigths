<?php
namespace Core;

class ViewHelper
{
    public static function render($view, $data = [])
    {
        // Imprime el contenido de $data para ver qué variables llegan
        //echo '<pre>';
        //print_r($data);
        //echo '</pre>';

        extract($data); // Extrae variables para usar en la vista

        $viewFile = __DIR__ . "/../app/views/{$view}.php"; // Ruta absoluta para la vista
        $header = __DIR__ . "/../app/views/header.php"; // Ruta absoluta para el header
        $footer = __DIR__ . "/../app/views/footer.php"; // Ruta absoluta para el footer

        if (file_exists($viewFile)) {
            require_once $header;
            require_once $viewFile;
            require_once $footer;
        } else {
            echo "<h1>ViewHelper - La vista '$view' no fue encontrada</h1>";
        }
    }
}
