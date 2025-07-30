<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('login');
});

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('logout', function()  {
    Auth::logout();
    return redirect('login');
});


// Ruta para gestionar la validación de usuarios
Route::post('check', [UsuarioController::class, 'check']);

Route::middleware(["auth"])->group(function (){
    // Ruta de inicio
    Route::get('home', function (){
        return view('saludo');
    });
    
    // Rutas para enlazar las carpetas de las vistas con los controladores
    Route::resource('categorias', CategoriaController::class);
    Route::resource('usuarios', UsuarioController::class);
});