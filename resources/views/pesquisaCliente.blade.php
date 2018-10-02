@extends('Bootstrap.extensao')
<html>

<head>
	

<body>

<center>
    <div class="body" style="width: 100%">
      <ul class="list-group">
        <center>
          <li class="list-group-item list-group-item-info">
            <h3> Pesquisa de clientes Cadastrados </h3>
          </li>
        </center>
      </ul>
    </div>
  </center>

    <section >
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div class="panel panel-info"/>
                    <div class="panel-heading"/>
                    <?php
                        if(isset($excluido)){
                            echo
                            "<center>
                                <div class='alert alert-success' role='alert'>
                                    <strong>Sucesso!</strong> Cliente salvo com sucesso!
                                </div>
                            </center>";
                        }
                    
                    ?>
                </div>       
            </div>
        </div>
        <div class="body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Whatsapp</th> 
                            <th>Opções</th>          
                                                      
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($clientes as $cliente) {
                            echo "
                            <tr>
                                <td>$cliente->nome</td>
                                <td>$cliente->email</td>
                                <td>$cliente->whatsapp</td>
                                <td style='width: 150px' >  
                                    <a href='/cliente'>                                
                                        <button style='width: 50px'type='button' class='btn btn-warning waves-effect'><i class='material-icons'>edit</i></button>
                                    </a>
                                    <a href='/cliente/delete?id=$cliente->id'>
                                        <button style='width: 50px' type='button' class='btn btn-danger waves-effect'><i class='material-icons'>delete</i></button>
                                    </a>
                                    <button style='width: 50px' 
                                    type='button' class='btn btn-warning waves-effect'><i class='material-icons'>edit</i></button>
                                    <button style='width: 50px' type='button' class='btn btn-danger waves-effect'><i class='material-icons'>delete</i></button>
                                </td>
                            </tr>
                            
                            ";
                        }
                    
                    
                        ?>
                    </tbody>
                </table>
            </div>
        </div>    
    </section>
</body>

</html>