<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class controllerCliente extends Controller
{
    public function cadastro()
    {
        return view('cliente');
    }

    public function save(Request $req){
        $cliente = new Cliente;

        var_dump($req) ; 
        exit;
        $cliente->nome = 'Júlia';//$request->name;

        $cliente->save();

        return view('cliente');
    }
}
