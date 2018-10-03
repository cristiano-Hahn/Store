
@extends('Bootstrap.extensao')
<!DOCTYPE html>
<html>
    <head>
<link rel="icon" href="img/logo.jpg" type="image/x-icon">

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


  <script type="text/javascript" src="js/materialize.min.js"></script>

</head>						
<body> 



<?php 
    if (isset($clienteSelecionado)){
        $titulo = 'Edição de cliente';
        $id=$clienteSelecionado['id'];
        $nome = $clienteSelecionado['nome'];
        $whatsapp = $clienteSelecionado['whatsapp'];
        $facebook = $clienteSelecionado['facebook'];
        $email = $clienteSelecionado['email'];
        $instagram = $clienteSelecionado['instagram'];
    } else{
        $id=''; 
        $titulo = 'Cadastro de cliente';
        $nome = '';
        $whatsapp = '';
        $facebook = '';
        $email = '';
        $instagram = '';
    }
?>

<div class="card">
    <div class="body">
        <form action=  "{{ url('cliente/save') }}" method="POST">
        @csrf <!--token de autenticação-->
            <div class="row">
                <div class="body" style="width: 100%">
                    <ul class="list-group">
                        <center>
                            <li class="list-group-item list-group-item-info">
                                <h4> <?php echo $titulo?></h4>
                            </li>
                        </center>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="input-field col s12">
                    <input id="nome" name='nome' type="text" class="validate" value=<?php echo $nome?>>
                    <input id="id" name='id' type="text" class="validate" hidden value=<?php echo $id?> >
                        <label for="nome">Nome</label>
                    </div>
                </div>   
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="input-field col s12">
                        <input id="whatsapp" name='whatsapp' type="text" class="validate"value=<?php echo $whatsapp?>>
                        <label for="whatsapp">Whatsapp</label>
                    </div>
                </div>   

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="input-field col s12">
                        <input id="facebook" name='facebook' type="text" class="validate" value=<?php echo $facebook?>>
                        <label for="facebook">Facebook</label>
                    </div>
                </div> 

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="input-field col s12">
                        <input id="email" name='email' type="text" class="validate" value=<?php echo $email?>>
                        <label for="email">Email</label>
                    </div>
                </div>   

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="input-field col s12">
                        <input id="instagram" name= 'instagram'type="text" class="validate" value=<?php echo $instagram?>>
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