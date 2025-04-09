<?php
namespace App\Controller;

use Core\ViewHelper;

class ViewsController
{
    public function index()
    {
        ViewHelper::render('home');
    }

    public function contact()
    {
        ViewHelper::render('contact');
    }
}
