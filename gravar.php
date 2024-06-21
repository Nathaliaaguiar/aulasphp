<?php

// 1- Resgatar os dados do formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];
$estado = $_POST["estado"];

// 2- Montar o SQL para gravar no banco
$sql = "INSERT INTO cliente (nome, email, idade, estado) VALUES ('$nome', '$email', '$idade', '$estado')";

// 3- Abrir conexão com o banco de dados
$con = mysqli_connect("localhost", "root", "", "aula5");

// Verificar se a conexão foi bem-sucedida
if (!$con) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// 4- Gravar os dados no banco
if (mysqli_query($con, $sql)) {
    $message = "Cliente cadastrado com sucesso!";
} else {
    $message = "Erro ao gravar: " . mysqli_error($con);
}

mysqli_close($con);

// Redirecionar de volta para o formulário com a mensagem
header("Location: index.php?message=" . urlencode($message));
exit;
?>
