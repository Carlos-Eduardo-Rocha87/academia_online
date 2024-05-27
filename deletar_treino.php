<?php 
include "db.php";

$id_treino = $_GET['id_treino'];

$query = "DELETE FROM treinos WHERE id_treino = '$id_treino'";


mysqli_query($conexao,$query);
header('location:index.php?pagina=home')
?>