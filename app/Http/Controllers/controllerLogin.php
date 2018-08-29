<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class controllerLogin extends Controller
{
    public function Index()
    {
        return view('viewIndex');
    }

    public function autenticar(Request $req)
    {
        $dados = $req->all();

        return  $dados['login'] 
    


    }
}
