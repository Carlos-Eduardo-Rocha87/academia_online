<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views/css/styleheader.css ">
</head>
<body>
    

<header class="header">
        <div class="container">
            <div class="logo">
                <img src="img/img_header[1].png" alt="Logo da Academia FitLife">
            </div>
            <nav class="navbar">
                <ul>
                    <li><a class="icones" href="#home">Início</a></li>
                    <li><a class="icones" href="#about">Sobre Nós</a></li>
                    <li><a class="icones" href="#services">Serviços</a></li>
                    <li><a class="icones" href="#schedule">Horários</a></li>
                    <li><a class="icones" href="#contact">Contato</a></li>
                    <?php if(isset($_SESSION['login'])){ ?>
                    <li><a class="icones" href="logout.php"><?php echo $_SESSION['usuario']."(logout)";?></a></li>
                    <?php } ?>
                </ul>
                <div class="menu-toggle" id="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menu-toggle');
            const navbarUl = document.querySelector('.navbar ul');

            menuToggle.addEventListener('click', function() {
                navbarUl.classList.toggle('show');
            });

            window.addEventListener('resize', function() {
                if (window.innerWidth > 900) {
                    navbarUl.classList.remove('show');
                }
            });
        });
    </script>


