<details>
<summary>
    <h2>Clientes</h2>
</summary>
<div>
<table style="width:80%">
            <tr>
            <th>Nome</th>
            <th>telefone</th>
            <th>email</th>
            <th>treino</th>
            <th>editar</th>
            <th>apagar</th>
            </tr>
            <tr>
            <?php 
            while($linha = mysqli_fetch_array($consulta_clientes)){
                echo"<tr><td>".$linha['nome_cliente'].'</td>';                
                echo "<td>".$linha['numero_telefone'].'</td>';
                echo "<td>".$linha['email'].'</td>';
                echo "<td>".$linha['treino'].'</td>';
            
                 ?>
                 <td><button class="btn"><a href="index.php?pagina=edicao_cliente&EDITAR=<?php echo $linha['id_cliente'];?>">editar</a></button></td>
                 <td><button class="btn"><a href="deletar_cliente.php?id_cliente=<?php echo $linha['id_cliente'];?>">deletar</a></button></td></tr>
            <?php 
                }
            ?>
            </tr> 
         </table>
</div>
</details>