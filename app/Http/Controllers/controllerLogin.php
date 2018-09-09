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
        return view('login');
    }

    public function teste()
    {
        return view('telaInicial');
    }

    public function autenticar(Request $req)
    {
        $dados = $req->all();

        $verifica = DB ::table('usuarios')->where(['nome'=>$dados['login'],'senha'=>$dados['senha']])->get(); 
        if(count($verifica) > 0)      
       {
            return view('telaInicial');
          }
          else{
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
}
?>