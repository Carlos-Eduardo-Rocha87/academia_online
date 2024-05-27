<?php 
include "db.php";

$nome_treino = $_POST['nome_treino'];
$total_Selects = $_POST['total_selects'];
$selectValues = [];

    // Loop para pegar os valores dos selects
for ($i = 1; $i <= $total_Selects; $i++) {
    $selectName = 'select' . $i;
    if (isset($_POST[$selectName])) {
        $selectValues[$selectName] = $_POST[$selectName];
    }
    print_r($selectValues);
    print($total_Selects);
}

$query_treino = "INSERT INTO treinos(nome_treino) VALUES('$nome_treino')";
mysqli_query($conexao,$query_treino);


foreach($selectValues as $way){
    $query_treino_exercicio = "INSERT INTO treinos_exercicios(id_exercicios,nome_treinos) VALUES ('$way','$nome_treino')";
    mysqli_query($conexao,$query_treino_exercicio);
}

header('location:index.php?pagina=login');

?>
