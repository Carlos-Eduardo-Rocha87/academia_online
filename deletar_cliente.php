<?php 
include "db.php";

$id_cliente = $_GET['id_cliente'];

$query = "DELETE FROM clientes WHERE id_cliente = $id_cliente";
$query2 = "DELETE FROM users WHERE id_users = $id_cliente";


mysqli_query($conexao,$query);
mysqli_query($conexao,$query2);
header('location:index.php?pagina=home')
?>