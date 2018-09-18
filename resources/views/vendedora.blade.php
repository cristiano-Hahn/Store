
<!DOCTYPE html>
<html>
<link rel="icon" href="img/logo.jpg" type="image/x-icon">
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>
</head>						
<body>
@extends('Bootstrap.extensao')

<div class="card">
    <div class="body">
        <form action="vendedora/save" method="POST">
        @csrf <!--token de autenticação-->
            <div class="row clearfix">
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
                    <div class="form-group">
                        <div class="form-line">
                            <label> Nome</label>
                            <input type="text" class="form-control" name="nome" required>
                        </div>
                    </div>  
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="form-group">
                        <div class="form-line">
                            <label> Login</label>
                            <input type="text" class="form-control" name="login">
                        </div>
                    </div>  
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="form-group">
                        <div class="form-line">
                            <label> Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                    </div>  
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="form-group">
                        <div class="form-line">
                            <label> Senha</label>
                            <input type="password" class="form-control" name="senha">
                        </div>
                    </div>  
                </div>
            </div>
        </form>
    </div>
</div>
<center>    
    <button style="width: 150px" type="submit" class="btn btn-success waves-effect">Cadastrar</button>
    <button style="width: 150px" type="button" class="btn btn-danger waves-effect">Excluir</button>
</center>
</body>
</html>