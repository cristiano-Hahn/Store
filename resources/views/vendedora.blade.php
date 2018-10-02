
@extends('Bootstrap.extensao')
<!DOCTYPE html>
<html>
    <head>
<link rel="icon" href="img/logo.jpg" type="image/x-icon">

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


  <script type="text/javascript" src="js/materialize.min.js"></script>

</head>						
<body> 

<div class="card">
    <div class="body">
        <form action="vendedora/save" method="POST">
        @csrf <!--token de autenticação-->
            <div class="row">
                <div class="body" style="width: 100%">
                    <ul class="list-group">
                        <center>
                            <li class="list-group-item list-group-item-info">
                                <h4>Cadastro de Vendedora</h4>
                            </li>
                        </center>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="input-field col s12">
                        <input name="nome" type="text" class="validate">
                        <label for="nome">Nome</label>
                    </div>
                </div>   

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="input-field col s12">
                        <input name="email" type="text" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="input-field col s12">
                        <input name="senha"type="text" class="validate">
                        <label for="senha">Senha</label>
                    </div>
                </div>   

                 <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="input-field col s12">
                        <input name="nivel" type="text" class="validate">
                        <label for="nivel">Nível</label>
                    </div>
                </div>   
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <center>    
                <button style="width: 150px" type="submit" class="btn btn-success waves-effect">Cadastrar</button>
                <button style="width: 150px" type="button" class="btn btn-danger waves-effect">Cancelar</button>
            </center>
            </div>
        </form>
    </div>
</div>

</body>
</html>