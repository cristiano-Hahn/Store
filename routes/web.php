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

    Route::get('/', ['uses'=>'controllerLogin@index']);

    Route::get('/cliente', 'controllerCliente@cadastro');

    Route::get('/cliente/pesquisa', 'controllerCliente@pesquisa');

    Route::get('/vendedora', ['uses'=>'controllerVendedora@cadvendedora']);

    Route::get('/telainicio', 'controllerTelainicial@telainicial');

    Route::get('/cliente', 'controllerCliente@cadastro');

    Route::post('/cliente/save',['uses'=>'controllerCliente@save']);
});
$this->resource('chamar', 'Inicio@Autenticar');