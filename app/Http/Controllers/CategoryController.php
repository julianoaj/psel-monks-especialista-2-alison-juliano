<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController
{
    public function index()
    {
        $categories = new Category();
        header('Content-Type: application/json');

        return json_encode($categories->getAll());
    }
}