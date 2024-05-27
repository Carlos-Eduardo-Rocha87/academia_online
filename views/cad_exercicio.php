<details>
<summary>
    <h2>adicionar exercícios</h2>
</summary>
  

  <div>
       
       <fieldset>
           <form id="registerForm" method="post" action="processamento_exercicio.php">
               <p>
                   <label for="name">Nome do exercício</label>
                   <input type="text" id="name" name="nome_exercicio" required>
               </p>
           
               <p>
                   <label for="telefone">repetições:</label>
                   <input type="number" id="telefone" name="repeticoes" class="phone-input" value="1" minlength="1" required>
               </p>
               <p>
                   <label for="telefone">execuções</label>
                   <input type="number" id="" name="execucoes" class="phone-input" value="1" minlength="1" required>
               </p>
               <p>
                       <label for="">intervalo entre repetições</label>
                       <input type="number" minlength="20" value="20" id="" name="intervalo" required>
               </p>
               <p>
                <textarea name="descricao" id=""></textarea>
               </p>
               <p>
                       <label for="arc_foto">Foto</label>
                       <input id="arc_foto" type="file" name="foto" >
               </p>
           
           
           
               <button type="submit">Cadastrar</button>
           </form>
       </fieldset>
   </div>
</details>