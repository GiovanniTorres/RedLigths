<?php
namespace App\Controller;

use Core\ViewHelper;

class ProjectController
{
    public function index()
    {
        ViewHelper::render('projects', [
            'title' => 'Listado de proyectos',
            'viewType' => 'list'
        ]);
    }

    public function show($id)
    {
        ViewHelper::render('projects', [
            'title' => "Detalle del proyecto #$id",
            'viewType' => 'detail',
            'id' => $id
        ]);
    }
}
