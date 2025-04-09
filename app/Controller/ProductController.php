<?php
namespace App\Controller;

use Core\ViewHelper;

class ProductController
{
    public function index()
    {
        ViewHelper::render('product', [
            'title' => 'Listado de productos',
            'viewType' => 'list'
        ]);
    }

    public function show($id)
    {
        ViewHelper::render('product', [
            'title' => "Detalle del producto #$id",
            'viewType' => 'detail',
            'id' => $id
        ]);
    }
}
