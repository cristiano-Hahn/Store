<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;


class controllerUsers extends Controller
{
    public function cadvendedora()
    {
        return view('vendedora');
    }

    public function save(Request $req){
        $users = new User;
        $users->name = $req['nome'];
        $users->email = $req['email'];
        $users->password = $req['senha'];
        $users->nivel = $req['nivel'];
        $users->save();

        ?>
        <center>
              <div class="alert alert-success" style='opacity: 0.8;' role="alert">
                  <strong>Sucesso!</strong> vendedor salvo com sucesso!
              </div>
            </center>
            <?php
        return view('vendedora');
    }

    public function pesquisa(){
        $vendedoras = DB::table('vendedoras')->get();

        return view('pesquisavendedora', ['vendedoras' => $vendedoras]);
    }

    public function getAll()
    {
        $vendedoras = DB::table('vendedoras')->get();

        return view('pesquisavendedora', ['vendedoras' => $vendedoras]);
    }


}
