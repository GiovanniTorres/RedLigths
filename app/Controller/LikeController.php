<?php
namespace App\Controller;

use Core\ViewHelper;

class LikeController
{
    public function index()
    {
        ViewHelper::render('likes', [
            'title' => 'Listado de reacciones',
            'viewType' => 'list'
        ]);
    }

    public function show($id)
    {
        ViewHelper::render('likes', [
            'title' => "Detalle de la reacción #$id",
            'viewType' => 'detail',
            'id' => $id
        ]);
    }
}
