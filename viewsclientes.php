<?php 
include "db.php";
$email = $_SESSION['email'];
$query_clientes = "SELECT treino FROM clientes WHERE email = '$email'";
$consulta = mysqli_query($conexao,$query_clientes);
$treino = mysqli_fetch_array($consulta);
$treinostr = $treino["treino"] ;
$query_treinos_exercicios = "SELECT treinos_exercicios.id_exercicios,treinos_exercicios.nome_treinos,exercicios.id_exercicio, exercicios.nome_do_exercicio, exercicios.descricao, exercicios.quantidade_de_repeticoes, exercicios.numero_de_execucoes, exercicios.intervalo_entre_repeticoes FROM exercicios, treinos_exercicios WHERE  treinos_exercicios.id_exercicios = exercicios.id_exercicio AND treinos_exercicios.nome_treinos = '$treinostr'";
$consulta_treinos_exercicios = mysqli_query($conexao,$query_treinos_exercicios);

?>
<head>
   <link rel="stylesheet" href="views/css/stylehome.css">
</head>
<body>
    <details>
        <summary>Treino</summary>
        <h1>Treino:</h1>
        <br>
        <br>
        <h2><?php echo $treino["treino"] ?></h2>
        <ul class="custom-list">
                <table style="width:80%">
                    <tr>
                        <th>
                            Nome do exercício
                        </th>
                        <th>
                            Descrição
                        </th>
                        <th>
                            Séries
                        </th>
                        <th>
                            Intervalo
                        </th>
                    </tr>
                    <?php
                    while ($linha = mysqli_fetch_array($consulta_treinos_exercicios)){
                        echo"<tr><td>".$linha['nome_do_exercicio'].'</td>';
                        echo "<td>".$linha['descricao'].'</td>';
                        echo "<td>".$linha['quantidade_de_repeticoes'].'X'.$linha['numero_de_execucoes'].'</td>';
                        echo "<td>".$linha['intervalo_entre_repeticoes'].'s'.'</td>';
                    }
                    ?>
                    </tr>
                </table>
                </ul>
    </details>
</body>