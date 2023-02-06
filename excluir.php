<?php
require('conexao.php');

$id = $_GET['id'];



$query = "DELETE FROM `tarefas` WHERE tarefas.id=$id";

$result = mysqli_query($conexao, $query);

$_SESSION['msg'] = 'Tarefa excluida com sucesso!!!';
$_SESSION['tipo_msg'] = 'danger';
header("location: index.php");
?>