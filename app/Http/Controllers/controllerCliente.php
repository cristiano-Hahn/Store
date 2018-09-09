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
        $cliente->nome = $req['nome'];
        $cliente->whatsapp = $req['whatsapp'];
        $cliente->facebook = $req['facebook'];
        $cliente->email = $req['email'];
        $cliente->instagram = $req['instagram'];
        $cliente->save();
        return redirect('/cliente');
    }
}
