<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ArticuloController;

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
    return view('welcome');
});

Route::resource('almacen/categoria',CategoriaController::class );
Route::get('almacen/categoria/edit/{id}', [CategoriaController::class , 'edit' ]);
Route::patch('almacen/categoria/update/{id}', [CategoriaController::class , 'update' ]);

Route::resource('almacen/articulo', ArticuloController::class);
Route::get('almacen/articulo/edit/{id}', [ArticuloController::class , 'edit' ]);
Route::patch('almacen/articulo/update/{id}', [ArticuloController::class , 'update' ]);
