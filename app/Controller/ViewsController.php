<?php
namespace App\Controller;

class ViewsController
{
    public function index()
    {
        print "ViewsController";
        ViewHelper::render('home');
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
