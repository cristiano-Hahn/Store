
@extends('Bootstrap.extensao')
<!DOCTYPE html>
<html>
    <head>
<link rel="icon" href="img/logo.jpg" type="image/x-icon">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

</head>						
<body>

<div class="card">
    <div class="body">
        <form action="cliente/save" method="POST">
        @csrf <!--token de autenticação-->
            <div class="row clearfix">
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
                            <label> Whatsapp</label>
                            <input type="text" class="form-control" name="whatsapp">
                        </div>
                    </div>  
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="form-group">
                        <div class="form-line">
                            <label> Facebook</label>
                            <input type="text" class="form-control" name="facebook">
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
                            <label> Instagram</label>
                            <input type="text" class="form-control" name="instagram">
                        </div>
                    </div>  
                </div>
            </div>
            <center>    
                <button style="width: 150px" type="submit" class="btn btn-success waves-effect">Cadastrar</button>
                <button style="width: 150px" type="button" class="btn btn-danger waves-effect">Excluir</button>
            </center>
        </form>
    </div>
</div>

</body>
</html>