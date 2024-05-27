<?php 
include 'db.php';
#home do personal
if ($admin==1){
            ?>
            <main class="principal">
            <p>home personal</p>

                <details>
                    <summary>
                        <h1>Área Clientes</h1>
                    </summary>
                    <?php 
        include 'db.php';
        include "views/clientes.php";
        include "views/cad_clientes.php"
        ?>
        </details>
        <details>
            <summary>
                <h1>Área Treinos</h1>
            </summary>
            <?php 
            include 'db.php';
            include 'views/exercicios.php';
            include 'views/cad_exercicio.php';
            include 'views/treinos.php';
            include 'views/criar_treino.php';
            ?>
        </details>
        
    </main>
<?php 
#home do cliente
}else{
?>
   <main class="principal">
    <section>
        <h1>Bem-vindo</h1>
        <br>
        <img class="imgUser" src="img/image.png" alt="">
    </section>
    <section>
        <?php 
        include 'db.php';
        include "viewsclientes.php"
        ?>
    </section>
   </main>


<?php }?>
