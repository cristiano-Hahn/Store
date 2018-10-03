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


Route::get('/login', [ 'as' => 'login', 'uses'=>'controllerLogin@index']);

Route::post('/autenticar',['uses'=>'controllerLogin@autenticar']);

Route::get('/logout', ['uses'=>'controllerLogin@logout']);

Route::group(['middleware' =>'auth'], function(){
Route::get('/vendedora', ['uses'=>'controllerUsers@cadastro']);

    Route::get('/', ['uses'=>'controllerLogin@index']);

    Route::get('/cliente', 'controllerCliente@cadastro');

    Route::get('/cliente/pesquisa', 'controllerCliente@pesquisa');

    Route::get('/cliente/delete', 'controllerCliente@delete');

    Route::get('/vendedora', ['uses'=>'controllerUsers@cadvendedora']);

    Route::post('/vendedora/save',['uses'=>'controllerUsers@save']);

    Route::get('/telainicio', 'controllerTelainicial@telainicial');

    Route::get('/cliente', 'controllerCliente@cadastro');

    Route::post('/cliente/save',['uses'=>'controllerCliente@save']);
});
$this->resource('chamar', 'Inicio@Autenticar');