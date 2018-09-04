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
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Atenção!</strong> Usuário ou Senha Inválidos!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</center>
             <?php
        return view('login');  
    }
    }
}
?>