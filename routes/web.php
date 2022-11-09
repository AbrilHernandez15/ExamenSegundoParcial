<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlador;

Route::get('/', function () {
    return view('welcome');
});

Route::get('consulta', [controlador::class, 'consulta'])->name('consulta');
Route::get('formulario', [controlador::class, 'formulario'])->name('formulario');
Route::post('validador', [controlador::class, 'validador'])->name('validador');
Route::get('/plantilla', function(){
    return view('plantilla');
});
