<?php 
include "db.php";
$exercicio = $_GET['id_exercicio'] ;
$query = "DELETE FROM exercicios WHERE id_exercicio = $exercicio";
mysqli_query($conexao, $query);
header('location:index.php?pagina=home')
?>