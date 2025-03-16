<?php

use App\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index');

// Category with throttle middleware using an options array.
Route::get('/api/categories', 'App\Http\Controllers\CategoryController@index', ['middleware' => 'throttle:60,1']);

Route::post('/categories/save', 'App\Http\Controllers\CategoryController@store');

return Route::getRoutes();