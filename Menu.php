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
     <h1 class="Titulo">JTi_notícias<a class="Subtitulo">JORNAL TECNOLOGIA DA INFORMACAO</a></h1>
        
     <!-- Configuração com CSS do Topo, Titulo e Subtitulo -->   
     <style type="text/css">
     #Topo{width: 100%; height: 70px; background-color: brown; margin: 5px,5px;}
     .Titulo{font-size: 60px; font-family: broadway; font-style:italic; margin: 5px; margin-top: 3px; color: honeydew;}
     .Subtitulo{font-size: 10px; font-family: broadway; float: right; margin: 8px; margin-top: 28px;}
     </style>

</div><!-- Fim da div topo -->

<div id="Links" align="center"><!-- Inicio da div Links -->

     <h1 class="titulo">Painel de Controle</h1>
     <!-- Links de navegação -->

     <p><button onclick="alert('Deseja cadastrar usuário?')"><a href="Form_cad.php" class="bt_painel" style="text-decoration: none">Cadastra Usuário</button>
     <p><button onclick="alert('Publicar conteúdos?')"><a href="Form_postar.php" class="bt_painel" style="text-decoration: none">Postar Conteúdos</button>
     <p><button onclick="alert('Postar na guia menor?')"><a href="Form_postar_II.php" class="bt_painel" style="text-decoration: none">Outros Conteúdos</button>
      
     <!-- Trocar os links por botõs -->

     <p><a href="Index.php"class="link">Retornar a página inicial</a></p>

     <style type=text/css>/* Formato dos links com css */
     #Links{border: 1px solid gray; margin: 20px 30%; min-height: 370px;}
     .titulo{font-size: 25px; font-family: broadway; padding: 2px;}
     .bt_painel{font-size: 18px; font-family: Arial; border-radius: 10px; color: white; background-color: brown;}
     .bt_painel:hover{background-color: gray;}
     .link{font-size: 15px; font-family: Arial; color:blue;}
     </style>
          
</div><!-- Fim da div links -->
    
</body>
</html>