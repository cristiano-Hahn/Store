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

         var_dump(attempt(['name'=>$dados['login'],'password'=>$dados['senha']]));
         exit;   
        if(Auth::attempt(['name'=>$dados['login'],'password'=>$dados['senha']])){

            return view('login');   
          }
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
        return "Saiu Fora";
    }
}
?>