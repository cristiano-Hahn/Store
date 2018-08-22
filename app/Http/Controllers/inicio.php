<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inicio extends Controller
{
    public function Index()
    {
        return view('index');
    }

    public function Autenticar()
    {
        return view('autenticar');
    }
}
