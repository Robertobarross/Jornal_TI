<?php

// Esse arquivo é vinculado ao Form_login.php //

include "connect.php"; // Include para acessar o bd //

// Campos do Form_login.php //
$email = $_POST['email'];
$senha = $_POST['senha'];

// Aceita apenas email e senha cadastrados do bd //
 if ($email != "" && $senha != "" ) {
     // echo "Usuário logado"; //

     // Aceitar apenas email cadstrado no bd //
     $sql = mysqli_query($link, "SELECT * FROM tb_usuario WHERE email = '$email' ");
     // Aceitar senha cadstrada no bd //
     $sql = mysqli_query($link, "SELECT * FROM tb_usuario WHERE senha = '$senha' ");
     // faz a consulta do registro no bd //
     $registro = mysqli_num_rows($sql); 
     // Verifica a senha e o nivel //
     while ($line = mysqli_fetch_array($sql)) {
      $senha_user = $line['senha'];
      $nivel = $line['nivel'];

     }
     // Se a senha e o nivel estiverem corretos o usuário será direcionado, se não estiver, ele será direcionado para página de cadastro //
 if ($registro) {
     if ($senha_user == $senha) {
     session_start();
     $_SESSION['login'] = $email;
     $_SESSION['password'] = $senha;
     if ($nivel == 0) {
     header('location:Form_postar.php');
     }else{
     header('location:Index.php');
     }
 }

 }else{
     echo "Você não é cadastrado(a)!";
     echo "<p><a href='Form_cad.php'>Click aqui e cadastre-se</a></p>";
 }
}

?>