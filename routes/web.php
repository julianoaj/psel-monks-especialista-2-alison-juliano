<?php

use App\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index');

// Category
Route::get('/api/categories', 'App\Http\Controllers\CategoryController@index');

return Route::getRoutes();
