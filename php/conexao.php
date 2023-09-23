<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "regioesdobrasil";

$conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);


$host = "localhost";
$user = "root";
$pass = "";
$dbname = "javascript";

$conexao = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "cadastro";

$conexaousuario = new mysqli($host, $user, $pass, $dbname);

?>