<?php
namespace App\Controller;

use Core\ViewHelper;

class ViewsController
{
    public function index()
    {
        // Pasar un dato de prueba a la vista
        $data = ['title' => 'Bienvenido a la página de inicio'];
        
        // Llamar al render
        ViewHelper::render('home', $data);
    }
}
