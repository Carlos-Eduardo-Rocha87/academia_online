<details>
<summary>
    <h2>Cadastro de Clientes</h2>
</summary>
  

  <div>
       <fieldset>
       <form id="registerForm" method="post" action="processamento_clientes.php">
           <p>
               <label for="name">Nome Completo</label>
               <input type="text" id="name" name="nome_cliente" required>
           </p>
           <p>
               <label for="email">Email</label>
               <input type="email" id="email" name="email_cliente" required>
           </p>
           <p>
               <label for="telefone">Telefone</label>
               <input type="text" id="telefone" name="tel_cliente" class="phone-input" maxlength="15" placeholder="(xx) xxxxx-xxxx" required>
           </p>
           <p>
                   <label for="arc_foto">Foto</label>
                   <input id="arc_foto" type="file" name="foto" >
           </p>
           <p>
                   <label for="password">Senha</label>
                   <input type="password" id="password" name="password" required>
           </p>
           <p>
            
            <select name="treino" required id="treino">
                <option value="">Selecione um treino</option>
                <?php 
                include 'db.php';
                while($linha = mysqli_fetch_array($consulta_treinos)){
                    echo '<option value="'.$linha['id_treino'].'">'.$linha['nome_treino'].'</option>';                  ?>
                    
                <?php 
                    }
                ?>
            </select>
           </p>
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
           
           <button type="submit">Cadastrar</button>
        </fieldset>
       </form>
    
   </div>
</details>