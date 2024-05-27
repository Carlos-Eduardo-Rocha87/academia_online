<details>
<summary>
    <h2>Exercicios</h2>
</summary>
<div>
<table style="width:80%">
            <tr>
                
            <?php 
            while($linha = mysqli_fetch_array($consulta_exercicios)){
                echo"<tr><td>".$linha['nome_do_exercicio'].'</td>';                
                echo "<td>".$linha['descricao'].'</td>';
                echo "<td>".$linha['quantidade_de_repeticoes'].'X'.$linha['numero_de_execucoes'].'</td>';
                echo "<td>".$linha['intervalo_entre_repeticoes'].'s'.'</td>';
                 ?>
                  <td><button class="btn"><a href="deletar_exercicio.php?id_exercicio=<?php echo $linha['id_exercicio'];?>">deletar</a></td></button></tr>
            <?php 
                }
            ?>
            </tr> 
         </table>
</div>
</details>
