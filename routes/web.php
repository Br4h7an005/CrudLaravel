<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('saludo');
});

Route::resource('categorias', CategoriaController::class);