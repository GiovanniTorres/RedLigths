<?php
namespace App\Controller;

use Core\ViewHelper;

class UserController
{
    public function index()
    {
        ViewHelper::render('users', [
            'title' => 'Listado de usuarios',
            'viewType' => 'list'
        ]);
    }

    public function show($id)
    {
        ViewHelper::render('users', [
            'title' => "Detalle del usuario #$id",
            'viewType' => 'detail',
            'id' => $id
        ]);
    }
}
