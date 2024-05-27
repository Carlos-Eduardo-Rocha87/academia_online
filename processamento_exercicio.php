<?php 
include "db.php";

$nome_exercicio = $_POST['nome_exercicio'];
$repeticoes = $_POST['repeticoes'];
$execucoes = $_POST['execucoes'];
$intervalo = $_POST['intervalo'];
$descricao = $_POST['descricao'];
$foto = $_POST['foto'];

$query = "INSERT INTO exercicios(nome_do_exercicio,quantidade_de_repeticoes,numero_de_execucoes,intervalo_entre_repeticoes,descricao,foto_do_exercicio) VALUES('$nome_exercicio','$repeticoes ','$execucoes','$intervalo','$descricao','$foto')";

mysqli_query($conexao,$query);
header("location:index.php");
?>