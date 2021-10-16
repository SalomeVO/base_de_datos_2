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

//Rota de prueba eliminar despues
Route::get('/', function () {
    return view('usuarios.lista');
});

//Formulario de usuario
Route::get('/form', 'UserController@userform');

//Guardar usuarios
Route::post('/save', 'UserController@save')-> name('save');
