<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class controllerLogin extends Controller
{
    public function Index()
    {
        return view('login');
    }

    public function teste()
    {
        return view('teste');
    }

    public function autenticar(Request $req)
    {
        $dados = $req->all();

         
        if(Auth::attempt(['name'=>$dados['login'],'password'=>$dados['senha']])){

            return view('telainicial');   
          }
        ?>
            <center>
              <div class="alert alert-danger" style='opacity: 0.8;' role="alert">
                  <strong>Atenção!</strong> Usuário ou Senha Inválidos!
              </div>
            </center>
        <?php
        return view('login');  
    }
}
?>