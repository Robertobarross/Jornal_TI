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
        <h1 class="Titulo_1">JTi<a class="Subtitulo">JORNAL TECNOLOGIA DA INFORMACAO</a></h1>
            
        <!-- Configuração com CSS do Topo, Titulo e Subtitulo -->   
        <style type="text/css">
        #Topo{width: 100%; height: 70px; background-color: brown; margin: 5px,5px; }
        .Titulo_1{font-size: 60px; font-family: broadway; margin: 5px; margin-top: 3px; color: honeydew;}
        .Subtitulo{font-size: 10px; font-family: Arial; float: right; margin: 8px; margin-top: 28px;}
        </style>
        
    </div><!-- Fim da div topo -->
    
    <!-- Inicio da div postagens -->
    <div id="Postagens" align="center">

        <h1 class="titulo">Públicar Conteúdo</h1>
 
        <!-- Formulário de postagens -->
        <form action="Cont_post.php" method="$_POST" enctype="multipart/form-data">
        
        <!-- Campos do formulário --> 
        <br><input type="text" name="titulo" class="camp_cad" placeholder="Titulo da postagem" require></br>
        <br><input type="file" name="foto" class="camp_cad"></br><br>
        <textarea name="texto" class="conteudo" placeholder="Digite o conteúdo com no nomáximo 900 caracteres..." maxlength="900" require></textarea></br>

        <!-- Botões -->
        <p><input type="submit" value="Publicar" class="bt_cad">
        <input type="reset" value="Limpar" class="bt_cad">

        </form>

        <!-- Formato com css -->
        <style type="text/css">/* Formato do titulo, campos e botões com css */
        .titulo{font-size: 25px; font-family: broadway; padding: 2px;}
        .camp_cad{width: 40%; margin: 2px; height: 15px; padding: 2px;}
        .conteudo{width: 40%; margin: 2px; height: 250px; padding: 2px;}
        .bt_cad{width:10%; padding: 2px; font-size: 15px; font-family: Arial; color: white; background-color: gray; }
        .bt_cad:hover{background-color: brown;}
        .Link{width:40%;font-size: 15px; font-family: Arial; color:blue;}
        </style>

		<p><a href="index.php" class="link">&larr;Voltar para inicial</p>

    </div>


</body>
</html>