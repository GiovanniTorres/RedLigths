<?php
namespace App\Controller;

use Core\ViewHelper;

class ProductController
{
    public function index()
    {
        ViewHelper::render('products', [
            'title' => 'Listado de productos'
        ]);
    }

    public function show($id)
    {
        ViewHelper::render('product_detail', [
            'title' => "Detalle del producto #$id",
            'id' => $id
        ]);
    }
}
