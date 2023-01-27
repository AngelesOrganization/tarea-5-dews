<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controladores;
use App\Http\Controllers\ControladorSugerencias;
use App\Http\Controllers\ControladorRegistros;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/tienda/public', [Controladores::class, 'store']);
Route::get('/tienda/public', [Controladores::class, 'index']);
Route::get('/tienda/public/{id}', [Controladores::class, 'show']);

Route::post('/tienda/public/sugerencias', [ControladorSugerencias::class, 'store']);
Route::get('/tienda/public/sugerencias', [ControladorSugerencias::class, 'index']);
Route::post('/tienda/public/registros', [ControladorRegistros::class, 'store']);
Route::get('/tienda/public/registros', [ControladorRegistros::class, 'index']);