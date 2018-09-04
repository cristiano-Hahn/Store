<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerCadastro extends Controller
{
    public function Index()
    {
        return view('viewIndex');
    }
    public function cadastroCliente()
    {
        return view('cadCliente');
    }
}
