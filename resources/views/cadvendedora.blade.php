
@extends('Bootstrap.extensao')
@section('conteudo')

<!DOCTYPE html>
<html>

<head>
</head>
						
<body>

<?php

if(!empty($_GET['resposta'])){

    if($_GET['resposta']=='1'){
    echo "<script>alert('Cadastro Efetuado com Sucesso!');</script>";
    }
    else{
    echo "<script>alert('Erro ao efetuar cadastro!);</script>";
    }
}

?>
    <section class="content">
        <div class="container-fluid">

            <!-- #END# Inline Layout | With Floating Label -->
            <!-- Multi Column -->
           
                           <div class="body">
                            <ul class="list-group">
                            <center>
                                <li class="list-group-item list-group-item-info"><h4>Cadastro De Vendedor</h4></li>
                               
                           
                            <br>
                        </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label> Nome </label>
                                            <input type="text" class="form-control" name="nome" required>
                                            
                                            <label> Login </label>
                                            <input type="text" class="form-control" name="login" required>
                                            
                                            <label> Senha </label>
                                            <input type="text" class="form-control" name="senha" required>
                                            
                                            <label>E-mail</label>
                                            <input type="text" class="form-control" name="email" required>
                                            
                                        </div>
                                    </div>
                                </div>  
                            </div>
                             </center>
                             </ul>
<center>
                                
                            <button type="submit" class="btn btn-success waves-effect">Cadastrar</button>
                            
                            </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Multi Column -->
        </div>
    </section>

</body>

</html>