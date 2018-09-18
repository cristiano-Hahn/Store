@extends('Bootstrap.extensao')
<html>

<head>
	

<body>

<center>
    <div class="body" style="width: 100%">
      <ul class="list-group">
        <center>
          <li class="list-group-item list-group-item-info">
            <h3> Pesquisa de clientes Cadastrados</h3>
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
                    
                </div>       
            </div>
        </div>
        <div class="body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Categoria</th>
                            <th>Opções</th>                                            
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>asdasd</td>
                        <td>asdad</td>
                        <td>asdad</td>
                    </tr>
                    <tr>
                        <td>asdasd</td>
                        <td>asdad</td>
                        <td>asdad</td>
                    </tr>
                    <tr>
                        <td>asdasd</td>
                        <td>asdad</td>
                        <td>asdad</td>
                    </tr>

                                
                                   
    <?php
   


    
	  /*  echo("
            <tr>
                <td> $vcodigo </td> 
                <td align=right> $Vcategoria</td>
                <center>  
                <td align=center> 
                    <a href='../categoria/editar?codigo=$vcodigo' data-toggle=modal data-target=#myModal>
                        <button type='button' class='btn btn-primary btn-xs' $botao>Visualizar Cadastro</button> 
                    </a> 
                </td>")*/
    
    ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </section>
</body>

</html>