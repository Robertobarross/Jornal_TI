<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jornal_TI</title>
</head>
<body>

<div id="Conteudo">

    <?php

    include "connect.php";

    $titulo = $_GET['titulo']?? '';
    $foto = $_GET['foto']?? '';
    $texto = $_GET['texto']?? '';

    ?> 

<div id="postagens">

   <h1 class="titulo"><?php echo $titulo;?></h1>
   <img src="postagens/<?php echo "post"."/".$foto;?>"class="Imagem">
   <br><p class="conteudo"><?php echo $texto;?></p></br>

   <style type="text/css">
   #postagens{width: 60%; height: auto; float: left; border: 1px solid lightgray; background-color: white; margin: 5px 1px;} 
   .titulo{font-size: 15px; font-family:Times New Roman; padding: 2px; margin: 10px 5px;}
   .Imagem{width: 90%; margin: 2px; height: 40%; padding: 2px;}
   .conteudo{font-size: 13px; font-family: Times New Roman; margin: 5px;}
   </style>
   
</div>
    
</body>
</html>

