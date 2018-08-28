<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_Login extends Controller
{
    public function Index()
    {
        return view('view_index');
    }

    public function Autenticar()
    {
        return view('autenticar');
    }
}
