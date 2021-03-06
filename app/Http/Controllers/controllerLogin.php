<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Illuminate\Support\Facades\DB;



class controllerLogin extends Controller
{
    public function index(){
        return view('login');
    }

    public function autenticar(Request $req)
    {
        $dados = $req->all();
         
        if(Auth::attempt(['name'=>$dados['login'],'password'=>$dados['senha']])){      
         
           $idd = Auth::id();
            $nivel = DB::table('users')->where('id',$idd)->value('nivel'); //pega o nivel 
            return view('telainicial', ['usuarionivel' => $nivel]); //passa o valor de nivel a view telainicial        
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

    public function logout(Request $req){
        Auth::logout();
        return view('login');    
    }
}
?>