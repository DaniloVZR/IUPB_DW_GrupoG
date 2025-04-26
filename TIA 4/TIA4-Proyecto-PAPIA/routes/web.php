<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoProyectoController; 

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tipo-proyectos', TipoProyectoController::class)->only(['index']);