<?php
namespace App\Controller;

use Core\ViewHelper;

class CommentController
{
    public function index()
    {
        ViewHelper::render('comments', [
            'title' => 'Listado de comentarios',
            'viewType' => 'list'
        ]);
    }

    public function show($id)
    {
        ViewHelper::render('comments', [
            'title' => "Detalle del comentario #$id",
            'viewType' => 'detail',
            'id' => $id
        ]);
    }
}
