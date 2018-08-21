<?php

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


//Esta Rota chama o metodo  CadastroCliente do controllerr (Cadastro_Controller)
Route::get('/cliente',['uses'=>'Cadastro_Controller@CadastroCliente']);