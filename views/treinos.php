<details>
    <summary>
        <h2>Treinos</h2>
    </summary>
    <table>

        <?php 
            while($linha = mysqli_fetch_array($consulta_treinos)){
                echo"<tr><td>".$linha['nome_treino'].'</td>';  
                ?>
                <td><button class="btn"><a href="deletar_treino.php?id_treino=<?php echo $linha['id_treino'];?>">deletar</a></button></td></tr>

                 <?php 
                }
                ?>
            </tr> 
        </table>
</details>