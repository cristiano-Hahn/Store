<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerCliente extends Controller
{
    public function cadastro()
    {
        return view('cliente');
    }
}
