<!DOCTYPE html>
<html>
<head>

    <title>Jornal_TI</title>
    <link rel="stylesheet" type="text/css" href="css/formato.css">

</head>
<body>

<div id="Topo"><!-- Inicio da div top -->

    <!-- Titulo da aplicação -->
    <h1 class="Titulo_1">JTi_notícias<a class="Subtitulo">JORNAL TECNOLOGIA DA INFORMACAO</a></h1>
                
    <!-- Configuração com CSS do Topo, Titulo e Subtitulo -->   
    <style type="text/css">
    #Topo{width: 100%; height: 70px; background-color: brown; margin: 5px,5px;}
    .Titulo_1{font-size: 60px; font-family: broadway; font-style:italic; margin: 5px; margin-top: 3px; color: honeydew;}
    .Subtitulo{font-size: 10px; font-family: broadway; float: right; margin: 8px; margin-top: 28px;}

    </style>
            
</div><!-- Fim da div topo -->

<div id="Cadastro" align="center">

    <h2 class="Titulo">Cadastrar Usuário</h2><!-- Inicio da div Cadastre-se -->
    
    <!-- Inicio do formulário -->
    <Form action="cad.php" method="POST" enctype="multipart/form-data">
    <!-- Campos do formulário -->
    <br><input type="email" name="email" class="camp_cad" placeholder="E-mail" required></br>
    <br><input type="password" size="10" maxlength="10" name="senha" class="camp_cad" placeholder="Senha" required></br>
    <br><input type="password" size="10" maxlength="10" name="confirmasenha" class="camp_cad" placeholder="Confirmar Senha" required></br>
    
    <!-- Botões -->
    <p><input type="submit" value="Cadastrar" class="bt_cad">
    <input type="reset" value="Limpar" class="bt_cad"> 
    <!-- Link para retornar ao menu inicial -->

    <p><a href="Index.php" class="Link" align="center">Retornar a página inicial</a></p>
    <p><a href="Menu.php" class="Link" align="center">Retornar ao Painel</a></p>

    </form>

    <style type="text/css">/* Formato do titulo, campos e botões com css */
    #Cadastro{border: 1px solid gray; margin: 20px 30%; min-height: 370px;}
    .Titulo{font-size: 25px; font-family: broadway; padding: 2px;}
    .camp_cad{width: 60%; margin: 2px; height: 15px; padding: 2px;}
    .bt_cad{width:25%; padding: 2px; font-size: 15px; font-family: Arial; color: white; background-color: gray; border-radius: 10px;}
    .bt_cad:hover{background-color: brown;}
    .Link{font-size: 15px; font-family: Arial; color:blue;}

    </style>
        
</div>

</body>
</html>