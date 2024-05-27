<?php 
session_start();
#banco de dados
include "db.php";

#cabeçalho
include "header.php";

#conteúdo
if(isset($_SESSION['login'],$_SESSION['usuario'],$_SESSION['isadmin'],$_SESSION['email'])){
  $admin = $_SESSION['isadmin'];
    if(isset($_GET['pagina'])){    
       $pagina = $_GET['pagina'];
    }else{
      $pagina = 'home';
    }
}else{
   $pagina='login';
   echo 'login';
}

switch ($pagina){
    case 'home':include "views/home.php";break;
    case 'edicao_cliente': include "views/edicao_cliente.php";break;
    default: header('location:login.php')   ;break;
}

#rodapé
include "footer.php";
?>
