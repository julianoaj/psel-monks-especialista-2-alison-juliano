<?php

namespace App\Http\Controllers;

use App\Http\Exceptions\ValidationException;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Exception;

class CategoryController
{
    public function index(): false|string
    {
        $categories = new Category();
        header('Content-Type: application/json');

        return json_encode($categories->getAll());
    }

    /**
     * @throws Exception
     */
    public function store(CategoryFormRequest $request): false|string
    {
        $data = $request->validate();

        if ($data['verification'] !== 854) {
            throw new ValidationException([
                'verification' => 'Valor da soma inválido.',
            ]);
        }

        $category = new Category();

        $names = [];

        $names[] = $data['category1'];
        $names[] = $data['category2'];
        $names[] = $data['category3'];
        $names[] = $data['category4'];

        $names = array_filter($names, fn($name) => $name !== '');

        foreach ($names as $name) {
            $category->create(['name' => $name]);
        }

        header('Content-Type: application/json');
        return json_encode([
            'data'   => $names,
        ]);
    }
}