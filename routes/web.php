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

Route::get('/principal', ['uses'=>'controllerLogin@index']);

Route::get('/teste', ['uses'=>'controllerLogin@teste']
);

Route::get('/telainicio', 'controllerTelainicial@telainicial');

Route::post('/autenticar',['uses'=>'controllerLogin@autenticar']);

Route::get('/cliente', 'controllerCadastro@cadastroCliente'
);

Route::get('/principal', ['uses'=>'Inicio@index']
);

Route::get('/contato', ['uses'=>'ContatoController@criar']
);

$this->resource('chamar', 'Inicio@Autenticar');

Route::get('/contato/{id?}', function ($id = null) {
    return "Contato id = $id";
});