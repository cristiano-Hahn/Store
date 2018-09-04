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

Route::get('/principal', ['uses'=>'controllerLogin@index']
);

Route::get('/teste', ['uses'=>'controllerLogin@teste']);

Route::get('/vendedora', ['uses'=>'controllerVendedora@cadvendedora']);

Route::get('/contato', ['uses'=>'ContatoController@criar']);


Route::get('/contato', ['uses'=>'ContatoController@criar']);

Route::get('/telainicio', 'controllerTelainicial@telainicial');

Route::post('/autenticar',['uses'=>'controllerLogin@autenticar']);

$this->resource('chamar', 'Inicio@Autenticar');



