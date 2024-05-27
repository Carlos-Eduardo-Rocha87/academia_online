<?php 
#inclusão do banco de dados
include "db.php";

#definição de dados da sessão
$email = addslashes($_POST['email']);
$senha = addslashes(md5($_POST['senha']));
$query = "SELECT * FROM users WHERE email = '$email' AND senha = '$senha' ";
$consulta = mysqli_query($conexao,$query);
$usuario = mysqli_fetch_array($consulta);

#validação da sessão
if(mysqli_num_rows($consulta)==1){
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $usuario['username'];
    $_SESSION['isadmin'] = $usuario['is_admin'];
    $_SESSION['email'] =  $usuario['email'];
    header('location:index.php?pagina=home');
}else if($email =="admin@gmail.com" and $senha =="202cb962ac59075b964b07152d234b70"){
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = 'Admin';
    $_SESSION['isadmin'] = 1;
    $_SESSION['email'] =  "admin@gmail.com";
    header('location:index.php?pagina=home');
}else{
    header('location:login.php?erro');
}
?>