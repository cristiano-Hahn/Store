
@extends('Bootstrap.extensao')

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sistema Teste</title>
    <link rel="icon" src="img/logo.png" type="image/x-icon">
</head>
<script>
    function mostraSenha(){
    if (document.getElementById("senha").type == 'text')
        document.getElementById("senha").type = "password";
    else{
        document.getElementById("senha").type = "text";
    }
}
</script>

<body class="login-page">
   <div class="login-box">
        <div class="logo">
        <center>
             <img id="profile-img"  src="img/logo.png" width="100" >
             </center>
             <br>
            <small><h4>Sistema Teste Engenharia de Software</h4></small>
        </div>
        <div class="card" style='border-radius: 25px;'>
            <div class="body">
                 <form name="login" action="/autenticar" method="POST">
                 {{ csrf_field() }}
                    <div class="msg">Informe seu Usúario e Senha</div>
                    
                     
                    <div class="input-field col s12">
                        <input id="login" name="login" type="text" class="validate"  required>
                        <label for="login">Usuário</label>
                    </div>


                    <div class="input-field col s12">
                        <input id='senha' type="password" name="senha" class="validate"  required>
                        <label for="senha">Senha</label>
                    </div>
                    


                    
                        <div class="col-xs-6 p-t-6">
                            <input type="checkbox" name="exibe" id="exibe" class="filled-in chk-col-green" onclick="mostraSenha()">
                            <label for="exibe">Exibir Senha</label>
                        </div>
                  
                    <div class="col-xs-6" style='align:right;'>
                        <button class="btn btn-outline-success" type="submit">Acessar</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
