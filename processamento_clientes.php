<?php 
include "db.php";

$nome_cliente = $_POST['nome_cliente'];
$email_cliente = $_POST['email_cliente'];
$tel_cliente = $_POST['tel_cliente'];
$senha_cliente = md5($_POST['password']);
$treino = $_POST['treino'];
$foto= $_POST['foto'];
$is_Admin = 0;

$query_treino = "SELECT nome_treino FROM treinos where id_treino = '$treino'" ;
$CONSULTA_TREINO = mysqli_query($conexao,$query_treino);
$array_treino =  mysqli_fetch_array($CONSULTA_TREINO);
$nome_treino = $array_treino['nome_treino'];

$query_clientes = "INSERT INTO clientes(nome_cliente,email,numero_telefone,foto_usuario,senha,treino) VALUES('$nome_cliente','$email_cliente ','$tel_cliente','$foto','$senha_cliente','$nome_treino')";
mysqli_query($conexao,$query_clientes);

$query_usuários = "INSERT INTO users(username,email,is_admin,senha) VALUES('$nome_cliente','$email_cliente ','$is_Admin','$senha_cliente')";
mysqli_query($conexao,$query_usuários);

sleep(5);

$query_clientes_exercicios = "INSERT INTO clientes_treinos(email_cliente, id_treino) values('$email_cliente','$treino')";
mysqli_query($conexao,$query_clientes_exercicios);

header('location:index.php');

?>