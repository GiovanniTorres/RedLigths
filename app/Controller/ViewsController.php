<?php
namespace App\Controller;

class ViewsController
{
    public function index()
    {
        print "ViewsController";
    }

    public function product($id = null)
    {
        if ($id) {
            print "Producto con ID: $id";
        } else {
            print "Lista de productos";
        }
    }
}
