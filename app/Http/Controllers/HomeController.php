<?php

namespace App\Http\Controllers;

use App\Facades\ViewLoader;
use App\Models\Category;
use Exception;

class HomeController
{
    /**
     * @throws Exception
     */
    public function index(): string
    {
        return ViewLoader::render('home');
    }
}