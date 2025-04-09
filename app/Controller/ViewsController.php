<?php
namespace App\Controller;

use Core\ViewHelper;

class ViewsController
{
    public function index()
    {
        // Simplemente imprimir el mensaje
        echo "Llamando al render desde el controlador 'index'<br>";
        ViewHelper::render('home');  // Llamamos al render con la vista 'home'
    }
}
