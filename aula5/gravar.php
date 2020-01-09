<?php

/*
gravar os dados no banco 
  1- resgatar os dados do formulario
  2-montar o sql para gravar o banco
  3-abrir conexão com o banco de dados
  4-gravar os dados no banco
  
*/

// 1- resgataros dados do formulario

$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];
$estado = $_POST["estado"];

// 2-montar o sql para gravar o banco
$sql = "insert into cliente values(null,'".$nome."','".$email."','".$idade."','".$estado."')";


// 3-abrir conexão com o banco de dados
//$con = mysqli_connect(servidor,usuario,senha,banco);
$con = mysqli_connect("localhost","root","","aula5");


// 4-gravar os dados no banco
//mysqli_query grava numa conexão os dados
if(mysqli_query($con,$sql)){
 echo"cliente cadastrado com sucesso!";
 }else{
 echo"erro ao gravar";
 }
mysqli_close($con);

' "" '
?>