<?php

use App\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index');

// Category
Route::get('/api/categories', 'App\Http\Controllers\CategoryController@index');
Route::post('/categories/save', 'App\Http\Controllers\CategoryController@store');

return Route::getRoutes();
