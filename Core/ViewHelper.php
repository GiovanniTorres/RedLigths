<?php
namespace Core;

class ViewHelper
{
    public static function render($view, $data = [])
    {
        // Mensaje de prueba para verificar si se entra en la función render
        echo "Render se ejecutó correctamente para la vista: $view<br>";
    }
}
