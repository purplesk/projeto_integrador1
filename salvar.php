<<?php 

require('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$data = $_POST['data'];
$senha = $_POST['senha'];

$query = "INSERT INTO `cadastro`(`nome`, `email`, `data`, `senha`) VALUES ('$nome', '$email','$data','$senha')";

$result = mysqli_query($conexao, $query);

header("location: login.php")


?>