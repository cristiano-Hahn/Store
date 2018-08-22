<?php

include 'conecta.php';
 
$categoria =$_POST["categoria"];
$sql = "insert into categoria(categoria) 
values('$categoria')";

if(mysqli_query($con,$sql)){
redirect('cadastros/cadCategoria?resposta=1');
}

redirect('cadastros/cadCategoria?resposta=2');
  
?>