<?php

include "connect.php";

// Campos do formulário Form_cad.php //
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmasenha = $_POST['confirmasenha'];

$registro = false; // Confirmar se todos os campos foram preenchidos //
if ($email != "" && $senha != "" && $confirmasenha != "")

// Confirma que confirmasenha é igual a senha //
if ($senha != $confirmasenha) {
    echo "<script>alert('Senha não é igual a anterior');window.history.go(-1)</script>";
}
else {
    echo $registro = true; /* Se as senhas estiverem corretas o registro é validado */
}
else {
    echo "<script>alert('Preencha todos os campos do formulário');window.history.go(-1)</script>"; /* Para que todos os campos sejam preenchidos */
}

// Não permite que o mesmo e-mail faça mais de um cadastro //
$sql = mysqli_query($link, "SELECT * FROM tb_usuario ORDER BY id_usuario, email DESC LIMIT 1");
while ($line = mysqli_fetch_array($sql)) {
    $id = $line['id_usuario'];
}

// Insere as informações na tabela do bd //
mysqli_query($link,"INSERT INTO tb_usuario(email,senha, nivel)VALUES('$email','$senha','')");

// Texto que confirma o cadastro. Editado com css //
echo "<p style='text-align:center; color:black; padding:5px;'>Usuário cadastrado!</br>";

// Links para retonar para página inicial, ou fazer login //
echo "<a href='Index.php' style='color:blue'>Retornar a página inicial</a> | <a href='Form_login.php' style='color:blue;'>Fazer Login</a>";
echo "</p>";

?>