<?php 

// Arquivo de conexão com o banco de dados db_jornal_ti //
// mysql_connect ou mysqli_connect //

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_jornal_ti";

// link da conexão //
$link = mysqli_connect($host, $user, $pass, $db);

?>