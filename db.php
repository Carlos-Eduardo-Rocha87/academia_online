<?php 
$servidor = 'localhost';
$senha = '';
$bd = 'academia';
$usuario = 'root';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

$query_usuario = "SELECT * FROM USERS";
$consulta_usuario = mysqli_query($conexao,$query_usuario);

$query_clientes = "SELECT * FROM clientes";
$consulta_clientes  = mysqli_query($conexao, $query_clientes);

$query_exercicios = 'SELECT * FROM  exercicios';
$consulta_exercicios = mysqli_query($conexao,$query_exercicios);

$query_treinos = "SELECT * FROM treinos";
$consulta_treinos = mysqli_query($conexao,$query_treinos);

$query_clientes_treinos = "SELECT clientes.nome_cliente,treinos.nome_treino, clientes_treinos.id_cliente_treino FROM clientes, treinos,clientes_treinos WHERE clientes_treinos.email_cliente = clientes.email AND clientes_treinos.id_treino = treinos.id_treino";
$consulta_clientes_treinos = mysqli_query($conexao,$query_clientes_treinos);


?>