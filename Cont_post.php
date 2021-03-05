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
    <h1 class="titulo">Postagens</h1>

    <?php

    include "connect.php";

    $titulo = $line['titulo'];
    $foto = $line['foto'];
    $texto = $line['texto'];

    ?>

<div class="postagens">

   <h1 class="titulo"><?php echo $titulo;?></h1>
   <img src="foto"<?php echo $foto;?>class="imagem">
   <p class="texto"><?php echo $texto;?></p>


    
</div>
    
</body>
</html>

