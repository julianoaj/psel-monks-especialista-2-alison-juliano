<?php

use App\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index');

return Route::getRoutes();
