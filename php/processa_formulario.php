<?php
include_once 'conexao.php';

// Obtenha os dados do formulário
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$telefone = $_POST['telefone-1'];

// Prepare e execute a declaração SQL para inserir os dados no banco de dados
$sql = mysqli_query($conexaousuario, "INSERT INTO usuarios(nome, sobrenome,  usuario, email, pass, telefone) VALUES ('$nome', '$sobrenome', '$usuario', '$email', '$pass', '$telefone')");

?>

<script>window.location.replace("formularioLogin.html");</script>
