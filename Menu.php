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
     <h1 class="Titulo">JTi<a class="Subtitulo">JORNAL TECNOLOGIA DA INFORMACAO</a></h1>
        
     <!-- Configuração com CSS do Topo, Titulo e Subtitulo -->   
     <style type="text/css">
     #Topo{width: 100%; height: 70px; background-color: brown; margin: 5px,5px; }
     .Titulo{font-size: 60px; font-family: broadway; margin: 5px; margin-top: 3px; color: honeydew;}
     .Subtitulo{font-size: 10px; font-family: Arial; float: right; margin: 8px; margin-top: 28px;}
     </style>

</div><!-- Fim da div topo -->

<div id="Links" align="center"><!-- Inicio da div Links -->

     <h1 class="Links_painel">Painel de Controle</h1>
     <!-- Links de navegação -->
     <br><a href="Form_cad.php" class="link" style="text-decoration: none">CADASTRAR USUÁRIO</a></br>
     <br><a href="Form_postar.php" class="link" style="text-decoration: none">POSTAR CONTEÚDO PRINCIPAL</a></br>
     <br><a href="Form_postar_II.php" class="link" style="text-decoration: none">POSTAR OUTROS CONTEÚDOS</a></br>

     <style type=text/css>/* Formato dos links com css */
     #Links{width: 100%; min-height: 500px; flood-opacity: center; border: 1px solid gray; margin: 5px 1px}
     .Links_painel{font-size: 25px; font-family: broadway; padding: 2px;}
     .link{font-size: 14px; font-family: Arial; margin: 5px; color: white; background-color: black;}
     .link:hover{background-color: gray;}/* Muda a cor do link quando o mause passa */
     </style>
          
</div><!-- Fim da div links -->
    
</body>
</html>