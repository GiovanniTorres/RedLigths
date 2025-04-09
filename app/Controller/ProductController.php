<?php
namespace App\Controller;

class ProductController
{
    public function index()
    {
        echo "Listado de productos";
    }

    public function show($id)
    {
        echo "Mostrando producto con ID: $id";
    }

    public function edit($id)
    {
        echo "Editar producto con ID: $id";
    }
}
