<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('plantilla');
});

Route::get('/principal', function(){
  return view('dashboard');
});

Route::resource('categorias', App\Http\Controllers\CategoriasController::class);
Route::resource('productos', App\Http\Controllers\ProductosController::class);

Route::get('download-pdf', '\App\Http\Controllers\ProductosController@generar_pdf')->name('descargar-pdf');

