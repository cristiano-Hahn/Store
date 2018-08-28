<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerLogin extends Controller
{
    public function Index()
    {
        return view('viewIndex');
    }

    public function Autenticar()
    {
        return view('autenticar');
    }
}
