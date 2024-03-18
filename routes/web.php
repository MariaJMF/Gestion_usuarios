<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gestionController;
use App\Http\Controllers\busquedaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});


//Gestion controller
Route::get('/formulario',[gestionController::class, 'index']);//formulario de creacion de usuario
Route::post('/crear',[gestionController::class, 'store']);
Route::get('/editar/{id}',[gestionController::class, 'edit']);// trae la informacion para editar 
Route::post('/actualizar/{id}',[gestionController::class, 'actualizar']);
Route::get('/lista',[gestionController::class, 'lista'])->name('lista');//Lista de usuario
Route::get('/eliminar/{id}',[gestionController::class, 'eliminar']);//Eliminar usuario
//Busqueda controller
Route::get('/buscar',[busquedaController::class, 'buscar'])->name('buscar');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
