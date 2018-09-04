<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerCliente extends Controller
{
    public function Index()
    {
        return view('viewIndex');
    }
    public function cadastro()
    {
        return view('cliente');
    }
}
