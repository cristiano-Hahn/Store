<?php
$login=strtoupper($_POST["login"]);
$senha=$_POST["senha"];
$consulta = mysqli_query($con,"select * from  usuario where login='$login' and senha='$senha'");

$linha = mysqli_num_rows($consulta);
	if($linha==0) {
		echo"<script>alert('Usuário ou Senha Inválidos!');</script>";
		echo "<script>window.location ='../controllerLogin/index';</script>";
    }
 	else{ 	
        	redirect('../controllerLogin/index');
			}

?>