<?php 
include "db.php";

$id_cliente = $_POST['id_aluno'];
$nome_cliente = $_POST['nome_cliente'];
$email_cliente = $_POST['email_cliente'];
$tel_cliente = $_POST['tel_cliente'];
$password = $_POST['password'];
$treino = $_POST['treino'];

$query_treino = "SELECT nome_treino FROM treinos where id_treino = '$treino'" ;
$CONSULTA_TREINO = mysqli_query($conexao,$query_treino);
$array_treino =  mysqli_fetch_array($CONSULTA_TREINO);
$nome_treino = $array_treino['nome_treino'];

$query = "UPDATE clientes SET nome_cliente = '$nome_cliente', email ='$email_cliente', numero_telefone ='$tel_cliente', senha = '$password', treino = '$nome_treino' where id_cliente = '$id_cliente'";
mysqli_query($conexao,$query);

$query_clientes_exercicios = "UPDATE  clientes_treinos SET id_treino = '$treino', email_cliente = '$email_cliente' where  email_cliente = '$email_cliente'";
mysqli_query($conexao,$query_clientes_exercicios);

header('location:index.php?pagina=home');
?>