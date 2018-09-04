<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro de Clientes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>        
        </style>
    </head>
    <body>
       
       
            <!-- #END# Inline Layout | With Floating Label -->
            <!-- Multi Column -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                          <form action="addCliente.php" method="POST">
                            <div class="row clearfix">
                           <div class="body">
                            <ul class="list-group">
                            <center>
                                <li class="list-group-item list-group-item-info"><h4>Cadastro Geral de Clientes</h4></li>
             ss                   </center>
                            </ul>
                        </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label> Nome Cliente </label>
                                            <input type="text" class="form-control" name="nome" required>
                                            
                                        </div>
                                    </div>
                                </div>
                                                                                                                                                                                                                                         
                             <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label>Telefone/Watts</label>
                                            <input type="integer" class="form-control" name="telefone" >
                                        </div>
                                    </div>
                                </div>  
                                                                                                                                                                                                         
                             <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label>E-mail</label>
                                            <input type="text" class="form-control" name="email" >
                                        </div>
                                    </div>
                                </div>                           
                            
                             <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label>facebook</label>
                                            <input type="text" class="form-control" name="Facebook">
                                        </div>
                                    </div>
                                </div>                               
                            
                            <br>
                                                                                                                                                                                                                                    
                            <button type="submit" class="btn btn-success waves-effect">Cadastrar</button>
                                                        
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Multi Column -->
        </div>
   





    </body>
</html>



