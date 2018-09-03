<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class controllerLogin extends Controller
{
    public function Index()
    {
        return view('viewIndex');
    }

    public function teste()
    {
        return view('teste');
    }

    public function autenticar(Request $req)
    {
        $dados = $req->all();

        $verifica = DB ::table('users')->where(['login'=>$dados['login'],'password'=>$dados['senha']])->get(); 
        if(count($verifica) > 0)      
       {
            return view('teste');
          }
          else{
        return view('viewIndex');  
    }
    }
}
