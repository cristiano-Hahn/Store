
@extends('Bootstrap.extensao')

<!DOCTYPE html>
<html>
<link rel="icon" src="img/logo.png" type="image/x-icon">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sistema Teste</title>
    <!-- Favicon-->
    <link rel="icon" src="img/logo.png" type="image/x-icon">

    <!-- Google Fonts -->

</head>
<script>
function mostraSenha(){
document.getElementById("senha").type = "text";
}
</script>

<body class="login-page">
   <div class="login-box">
        <div class="logo">
        <center>
             <img id="profile-img"  src="img/logo.png" width="200" heigth="60">
             </center>
             <br>
            <small><h4>Sistema Teste Engenharia de Software</h4></small>
        </div>
        <div class="card">
            <div class="body">
                 <form name="login" action="" method="POST">
                    <div class="msg">Informe seu Usúario e Senha</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons"></i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="login" placeholder="Usuario" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons"></i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="exibe" id="exibe" class="filled-in chk-col-green" onclick="mostraSenha()">
                            <label for="exibe">Exibir Senha</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-outline-success" type="submit">Acessar</button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
