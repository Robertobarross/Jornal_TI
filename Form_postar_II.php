<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jornal_TI</title>
</head>
<body>

<div id="Topo"><!-- Inicio da div top -->

         <!-- Titulo da aplicação -->
         <h1 class="Titulo_1">JTi_notícias<a class="Subtitulo">JORNAL TECNOLOGIA DA INFORMACAO</a></h1>
    
         <!-- Configuração com CSS do Topo, Titulo e Subtitulo -->   
         <style type="text/css">
         #Topo{width: 100%; height: 70px; background-color: brown; margin: 5px,5px; }
         .Titulo_1{font-size: 60px; font-family: broadway; font-style:italic; margin: 5px; margin-top: 3px; color: honeydew;}
         .Subtitulo{font-size: 10px; font-family: broadway; float: right; margin: 8px; margin-top: 28px;}
         </style>

</div><!-- Fim da div topo -->

<div id="Postagens_II" align="center">
    
        <h1 class="titulo">Postar Outros Conteúdos<h1>

        <!-- Formulário de postagens II -->
        <form action="Cont_post_II.php" method="POST" enctype="multipart/form-data">      
        <!-- Campos do formulário --> 
        <br><input type="text" name="titulo" class="camp_cad" placeholder="Titulo da postagem" require></br>
        <br><input type="file" name="foto" class="camp_cad"></br>
        <textarea name="texto" class="conteudo" placeholder="Digite o conteúdo com no nomáximo 900 caracteres..." maxlength="900" require></textarea></br>

        <!-- Botões -->
        <p><input type="submit" value="Publicar" class="bt_cad">
        <input type="reset" value="Limpar" class="bt_cad">

        <p><a href="index.php" class="link">Voltar para página inicial</a></p>
        <a href="Menu.php" class="link">Voltar ao Painel</a>

        </form>

        <!-- Formato com css -->
        <style type="text/css">/* Formato do titulo, campos e botões com css */
        .titulo{font-size: 25px; font-family: broadway; padding: 2px;}
        .camp_cad{width: 40%; margin: 2px; height: 15px; padding: 2px;}
        .conteudo{width: 40%; margin: 2px; height: 250px; padding: 2px;}
        .bt_cad{width:10%; padding: 2px; font-size: 15px; font-family: Arial; color: white; background-color: gray; border-radius: 10px; }
        .bt_cad:hover{background-color: brown;}
        .Link{width: 20%; font-size: 15px; font-family: Arial; color:blue;}
        </style>

</div>
    
</body>
</html>