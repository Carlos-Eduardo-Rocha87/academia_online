 <!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="views/css/stylelogin.css">
</head>
<body>
      <div class="bottom">
      <div class="main-login">
        <!--mensagen de erro-->    
         
        <div class="left-login">
          <h1>Faça seu login<br />E veja suas atualizações<span>.</span></h1>
          <img class="imglogo" src="img/img_header[1].png" alt="">
        </div>
        <div class="left-login2">
          <h1>Faça seu login<br />E veja suas atualizações<span>.</span></h1>
          <img class="imglogo" src="img/img_header[1].png" alt="">
        </div>
        <div class="right-login">
          <div class="card-login">
            <form method="post" action="processa_login.php">
            <h1>Entre por aqui</h1>
            <?php if(isset($_GET['erro'])){ ?>
            <div class='error'>usuário e/ou senha invalidos<div>
             <?php }?> 
            <div class="textfield">
              <label for="usuario">Email</label>
              <input type="email" required name="email" placeholder="Email" />
            </div>
            <div class="textfield">
              <label for="senha">Senha</label>
              <input type="password" required name="senha" placeholder="Senha" />
            </div>
            <button type="submit" class="btn-login">Entrar</button>
          </form>
          </div>
        </div>
      </div>
    </div>
</body>
</html>