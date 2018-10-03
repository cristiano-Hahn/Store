@extends('Bootstrap.extensao')

<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8"> 
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title>Tela inicial</title>
</head>	
<body >

<?php
 if ($usuarionivel==1) // 0 = administrador 1= usuario sem permissão de cad vendedor
   $aparece = 'display:none';
 else 
  $aparece =' ';
?> 



  <center>
    <div class="body" style="width: 100%">
      <ul class="list-group">
        <center>
          <li class="list-group-item list-group-item-info">
            <h2>Sistema de cores</h2>
          </li>
        </center>
      </ul>
    </div>
  </center>

  <div class='row'>

  <table>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="card">
        <div class="card-image">
          <img src="{{ asset('img/cadCliente.png') }}">
          <a href="/cliente" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <span class="card-title">Cadastros de Clientes</span>
          <p>Cadastrar um novo cliente.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <div class="card">
      <div class="card-image">
        <img src="{{ asset('img/pesqCliente.png') }}">
        <a href="/cliente/pesquisa" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
      </div>
      <div class="card-content">
        <span class="card-title">Pesquisa de clientes</span>
        <p>Pesquisar um cliente cadastrado.</p>
      </div>
    </div>
  </div>


  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style= <?php echo($aparece)?>>
    <div class="card">
      <div class="card-image">
        <img src="{{ asset('img/cadVendedor.png') }}">
        <a href="/vendedora" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
      </div>
      <div class="card-content">
        <span class="card-title">Cadastros de Vendedores</span>
        <p>Cadastrar um novo funcionário.</p>
      </div>
    </div>
  </div>    

</div>
</table>
</body>
</html>
