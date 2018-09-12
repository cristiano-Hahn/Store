
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
        <form action="cliente/save" method="POST">
        @csrf <!--token de autenticação-->
            <div class="row">
                <div class="body" style="width: 100%">
                    <ul class="list-group">
                        <center>
                            <li class="list-group-item list-group-item-info">
                                <h4>Cadastro de Cliente</h4>
                            </li>
                        </center>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="input-field col s12">
                        <input id="nome" type="text" class="validate">
                        <label for="nome">Nome</label>
                    </div>
                </div>   

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="input-field col s12">
                        <input id="whatsapp" type="text" class="validate">
                        <label for="whatsapp">Whatsapp</label>
                    </div>
                </div>   

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="input-field col s12">
                        <input id="facebook" type="text" class="validate">
                        <label for="facebook">Facebook</label>
                    </div>
                </div> 

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="input-field col s12">
                        <input id="email"type="text" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>   

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="input-field col s12">
                        <input id="instagram"type="text" class="validate">
                        <label for="instagram">Instagram</label>
                    </div>
                </div>   
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <center>    
                <button style="width: 150px" type="submit" class="btn btn-success waves-effect">Cadastrar</button>
                <button style="width: 150px" type="button" class="btn btn-danger waves-effect">Excluir</button>
            </center>
            </div>
        </form>
    </div>
</div>

</body>
</html>