<?php
// O arquivo a baixo é responsável por enviar do formulário postagens para tela principal, Index.php
include 'connect.php';// Arquivo de conexão
date_default_timezone_set('America/Sao_Paulo');// Define a data
session_start();// inicia ou recupera a sessão
// O código a baixo contem as informações que serão postadas na tela principal, Index.php

/* $login = $_SESSION['login'];
$senha = $_SESSION['senha']; 
$sql =mysqli_query($link, "SELECT * FROM tb_user WHERE email = '$login'"); 
while($line = mysqli_fetch_array($sql)) {
	$senha = $line['senha'];
	$nivel = $line['nivel'];
    $id_user = $line['id_user'];
} 
if ($senha == $senha && $nivel == 1) { */
$titulo = $_POST['titulo'];
$foto = $_FILES['foto']['name'];
$tipo = $_FILES['foto']['type'];
$conteudo = $_POST['texto'];
//echo "$foto";
// O código a baixo faz a verificação se todos os campos estão preenchidos, se não estiverem preenchidos não pe possível prosseguir com a postagem.
$registro = false;
if ($titulo != "" && $foto != "" && $texto != "") {
	$registro = true;
}else{
	echo "<script>window.history.go(-1);</script>";
}
// Esse é o código responsável por trazer a consulta do banco de dados.
$sql = mysqli_query($link, "SELECT * FROM tb_postar ORDER BY id_usuario DESC");
while ($line = mysqli_fetch_array($sql)) {
	$id = $line['id_usuario'];
}
/* @$id = $id+1;
// Esse código é responsável por criar uma pasta onde os arquivos serão armazenados. 
$pasta = "postagens/post$id";
// echo "$pasta";
if(file_exists($pasta)) {
	echo "Pasta já existe"; // Se ouver algum erro, aparecerá a mensagem, pasta já existe.
}else{
	mkdir($pasta,0777); // Aqui confirma a criação da pasta
} */


$dt = date('y-m-d');
$hr = time('h:i:s');
//$page = 1; 

/*if ($registro == true) {

$id = $id+1;
// Esse código é responsável por criar uma pasta onde os arquivos serão armazenados. 
$pasta = "postagens/post$id";
// echo "$pasta";
if(file_exists($pasta)) {
	echo "Pasta já existe"; // Se ouver algum erro, aparecerá a mensagem, pasta já existe.
}else{
	mkdir($pasta,0777); // Aqui confirma a criação da pasta
}*/


//$dt = date('y-m-d');
//$hr = time('h:i:s');
//$page = 1;

// Código responsável por inserir as informações na tabela do banco de dados.
mysqli_query($link, "INSERT INTO tb_postagens(titulo, foto, texto, dt, hr, id_usuario)VALUES('$titulo','$foto','$texto','$dt','$hr','$id_usuario')");
//move_uploaded_file($_FILES['foto']['tmp_name'],$pasta."/".$foto);// Código responsável por enviar a imagem para pasta
header('location:form_postar.php');
/*}else{
	echo "Não foi pissível cadastrar o conteúdo";
}*/

?>