<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class controllerUsers extends Controller
{
    public function cadastro()
    {
        return view('vendedora');
    }

    public function save(Request $req){
        $users = new Users;
        $users->nome = $req['nome'];
        $users->login = $req['login'];
        $users->senha = $req['senha'];
        $users->email = $req['email'];
        $users->save();
        return redirect('/users$users');
    }
}
