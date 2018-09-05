
<!DOCTYPE html>
<html>
<link rel="icon" href="img/logo.jpg" type="image/x-icon">

<head>
</head>						
<body>
@extends('Bootstrap.extensao')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form action="cliente/save" method="POST">
                                <div class="row clearfix">
                                    <div class="body">
                                        <ul class="list-group">
                                            <center>
                                                <li class="list-group-item list-group-item-info">
                                                    <h4>Cadastro de Cliente</h4>
                                                </li>
                                            </center>
                                        </ul>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label> Nome</label>
                                                <input type="text" class="form-control" name="nome" required>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label> Whatsapp</label>
                                                <input type="text" class="form-control" name="endereco">
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label> Facebook</label>
                                                <input type="text" class="form-control" name="bairro">
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label> Email</label>
                                                <input type="text" class="form-control" name="cpf">
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label> Instagram</label>
                                                <input type="text" class="form-control" name="telefone">
                                            </div>
                                        </div>  
                                    </div>
                                    <center>    
                                        <button type="submit" class="btn btn-success waves-effect">Cadastrar</button>
                                    </center>
                                    <center>    
                                        <button type="button" class="btn btn-danger waves-effect">Excluir</button>
                                    </center>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>