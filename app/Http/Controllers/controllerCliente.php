<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Illuminate\Support\Facades\DB;


class controllerCliente extends Controller
{
    public function cadastro()
    {
        return view('cliente');
    }

    public function save(Request $req){
        $cliente = new Cliente;
        
        $cliente->nome = $req['nome'];
        $cliente->whatsapp = $req['whatsapp'];
        $cliente->facebook = $req['facebook'];
        $cliente->email = $req['email'];
        $cliente->instagram = $req['instagram'];
        $cliente->save();

        ?>
            <center>
              <div class="alert alert-success" style='opacity: 0.8;' role="alert">
                  <strong>Sucesso!</strong> Cliente salvo com sucesso!
              </div>
            </center>
            <?php
        return redirect('/cliente');
    }

    public function pesquisa(){
        $clientes = DB::table('clientes')->get();

        return view('pesquisaCliente', ['clientes' => $clientes]);
    }

    public function delete(Request $req)
    {
        $cliente = Cliente::find($req->id);

        $cliente->delete();

        ?>
            <center>
              <div class="alert alert-success" style='opacity: 0.8;' role="alert">
                  <strong>Sucesso!</strong> Cliente excluído com sucesso!
              </div>
            </center>
        <?php
        return redirect('/cliente/pesquisa');
    }


}
