<?php

namespace App\Http\Controllers;

use App\Facades\ViewLoader;

class HomeController
{
    /**
     * @throws \Exception
     */
    public function index()
    {
        return ViewLoader::render('home');
    }
}