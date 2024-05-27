<main class="principal">
    <details>
    <summary>
        <h2>Cadastro de Clientes</h2>
    </summary>
        <div>
        <?php
            while($linha = mysqli_fetch_array($consulta_clientes)){
    
        ?>
        <?php
            if($linha['id_cliente']==$_GET['EDITAR']){
    
            ?>
            <form id="registerForm" method="post" action="editar_cliente.php">
                <legend>Edição de clientes</legend>
                <p>
                   <input type="hidden" name="id_aluno" value="<?php echo $linha['id_cliente'] ?>">
                   <label for="name">Nome Completo</label>
                   <input type="text" id="name" name="nome_cliente" value="<?php echo $linha['nome_cliente'] ?>"  required>
                </p>
                <p>
                   <label for="email">Email</label>
                   <input type="email" id="email" name="email_cliente" value="<?php echo $linha['email'] ?>" required>
                </p>
                <p>
                   <label for="telefone">Telefone</label>
                   <input type="text" id="telefone" name="tel_cliente" maxlength="15" value="<?php echo $linha['numero_telefone'] ?>" placeholder="(xx) xxxxx-xxxx" required>
                </p>
                <p>
                       <label for="arc_foto">Foto</label>
                       <input id="arc_foto" type="file" name="foto" >
                </p>
                <p>
                       <label for="password">Senha</label>
                       <input type="password" id="password" value="<?php echo $linha['senha'] ?>" name="password" required>
                </p>
                <select name="treino" id="treino">
                    <option value="">Selecione um exercicio</option>
                    <?php
                    while($linha = mysqli_fetch_array($consulta_treinos)){
                        echo '<option value="'.$linha['id_treino'].'">'.$linha['nome_treino'].'</option>';                  ?>
    
                    <?php
                        }
                    ?>
                </select>
                <script>
           document.getElementById('telefone').addEventListener('input', function (e) {
               var input = e.target;
               var inputValue = input.value.replace(/\D/g, '');
               var formattedValue = '';
    
               if (inputValue.length > 0) {
                   formattedValue += '(' + inputValue.substring(0, 2);
               }
               if (inputValue.length >= 3) {
                   formattedValue += ') ' + inputValue.substring(2, 7);
               }
               if (inputValue.length >= 8) {
                   formattedValue += '-' + inputValue.substring(7, 11);
               }
    
               input.value = formattedValue;
           });
                </script>
    
                 <button type="submit">Editar</button>
            </form>
            <?php
            }
            ?>
            <?php
            }
            ?>
        </div>
    </details>
</main>