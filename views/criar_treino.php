<head>
    <link rel="stylesheet" href="views/css/style.css">
</head>
<details>
<summary>
    <h2>Criar treinos</h2>
</summary>
<div class="formtreino">
    <fieldset>

        <form id="registerForm" method="post" action="processamento_treino_exercicio.php">
            
            <p>
                <label for="nome_treino">Nome do treino</label>
                <input type="text" id="nome_treino" name="nome_treino" required>
            </p>
            
            <div id="select-container">
                <select name="select1" id="treino">
                    <option value="">Selecione um exercicio</option>
                    <?php 
                include "db.php";
                while($linha = mysqli_fetch_array($consulta_exercicios)){
                    echo '<option value="'.$linha['id_exercicio'].'">'.$linha['nome_do_exercicio'].'</option>';                    
                }
                while($linha = mysqli_fetch_array($consulta_exercicios)){
                    echo"<tr><td>".$linha['nome_do_exercicio'].'</td>';                
                    ?>
                <?php 
                    }
                    ?>
                </tr> 
                ?>
            </select>
        </div>
        
        <input type="hidden" name="total_selects" id="totalSelectsInput" value="1">
        
        <button type="button" id="add-select-btn">Adicionar Campo Select</button>
        
        <button type="submit">Cadastrar</button>
    </form>
</div>
</fieldset>
<script>
        let selectCount = 1; 
        
     
        const initialSelect = document.querySelector('select[name="select1"]');
        const optionsHTML = initialSelect.innerHTML;

        document.getElementById('add-select-btn').addEventListener('click', function() {
            selectCount++;
            const selectContainer = document.getElementById('select-container');
            
            const newSelect = document.createElement('select');
            newSelect.name = `select${selectCount}`;
            newSelect.innerHTML = optionsHTML; 
            
            selectContainer.appendChild(newSelect);
            totalSelectsInput.value = selectCount;
        });
    </script>
</details>