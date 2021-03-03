<!DOCTYPE html>
<html>
<head>

    <title>Jornal_TI</title>
    <link rel="stylesheet" type="text/css" href="css/formato.css">

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

<p><div id="Log" align="center";

     <h2 class="titulo">Login</h2>

     <Form action="logar.php" method="POST" enctype="multipart/form-data">

     <br><input type="email" name="email" class="camp_cad" placeholder="Email" required>
     <br><input type="password" name="senha" class="camp_cad" placeholder="Senha" require>

     <p></p><input type="submit" value="Logar" class="bt_cad">
     <input type="reset" value="Limpar" class="bt_cad"></p>

     <a href="Form_cad.php" class="Link" align="center">Cadastre-se</a> | <a href="Index.php" class="Link">Página Inicial</a>

     </form>

     <style type="text/css">
    .titulo{font-size: 25px; font-family; broadway; padding: 2px;}
    .camp_cad{width: 30%; margin; 15px; height: 15px; padding: 2px;}
    .bt_cad{width:10%; padding;2px; font-size: 15px; font-family; Arial; color: white; background-color: gray; }
    .bt_cad:hover{background-color: brown;}
    .Link{font-size: 15px; font-family: Arial; color:blue;}

     </style>

</div>
    
</body>
</html>