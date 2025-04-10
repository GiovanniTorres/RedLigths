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

        // Rutas de las vistas y archivos
        $viewFile = "../app/views/{$view}.php";
        $header = "../app/views/header.php";
        $footer = "../app/views/footer.php";

        if (file_exists($viewFile)) {
            require_once $header;
            require_once $viewFile;
            require_once $footer;
        } else {
            echo "<h1>ViewHelper - La vista '$view' no fue encontrada</h1>";
        }
    }
}
