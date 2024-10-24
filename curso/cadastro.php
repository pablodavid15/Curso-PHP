<?php 
$conexao = mysqli_connect("localhost", "root", "", "cadastro_usuarios");

$login = $_POST['login'];
$senha = md5($_POST['senha']);
$sql = "INSERT INTO usuarios (login, senha) VALUES ('$login', '$senha')";
mysqli_query($conexao, $sql);

mysqli_close($conexao)
?>