<!DOCTYPE html>
<html>
<head>
    
    <title>Jornal_TI</title>
    <link rel="stylesheet" type="text/css" href="css/formato.css">

</head>
<body>

    <div id="Global"><!-- Inicio da div global -->

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

    <div id="Cardapio" align="center"><!-- Inicio da div Menu -->

        <h2 class="Menu">MENU</h2><!-- Menu e links de acesso -->
        <a href="ADM.php" class="links_menu" style="text-decoration: none">ADMINISTRADOR</a>
        <a href="Conteudo.php" class="links_menu" style="text-decoration: none">POSTAGENS</a>
        <a href="Contato.php" class="links_menu" style="text-decoration: none">CONTATO</a>

        <style type="Text/css">/* Configuração do Menu e links */
        #Cardapio{width: 10%; min-height: 500px; float: left; border: 1px solid gray; margin: 5px 1px}
        .Menu{font-size: 20px; font-family: Arial; margin: 5px; color: white; background-color: brown;}
        .links_menu{font-size: 14px; font-family: Arial; margin: 5px; color: white; background-color: gray;}
        .links_menu:hover{background-color: brown;}/* Muda a cor do link quando o mause passa */
        </style>

    </div><!-- Fim da div Menu -->

    <div id="Conteudo"><!-- Inicio da div Conteúdo -->

        <h3 class="Titulo_conteudo">JTi noticias</h3>
        <style type="text/css">/* Configurações da div e do titulo com css */
        #Conteudo{width: 60%; height: auto; float: left; border: 1px solid lightgray; background-color: white; margin: 5px 7px 5px;}
        .Titulo_conteudo{font-size: 18px; font-family: broadway; color: black; margin: 5px;}
        </style>

    </div><!-- Fim da div conteúdo -->

    <div id="Conteudo_I"><!-- Inicio da div Conteudo_I -->

        <!-- Obs. Essa div vai receber conteudos de menor influêcia -->
        <h4 class="Titulo_conteudo_I"></a>Outras noticias</h4>
        <style type="text/css">/* Configurações da div e do titulo com css */
        #Conteudo_I{width: 28%; height: auto; float: right; border: 1px solid lightgray; background-color: white; margin: 5px 1px;}
        .Titulo_conteudo_I{font-size: 14px; font-family: Arial; color: black; margin: 5px;}
        </style>

    </div><!-- Fim da div Conteudo_I -->

    <div id="Rodape"><!-- Inicio da div Rodapé -->

        <h5 class="Direitos" align="center">&COPY; Copyright | 2021 | JTi</h5>
        <style type="text/css">/* Configurações da div e dos direitos autorais com css */
         #Rodape{width: 100%; height: 50px; float: left; background-color: brown; margin: 5px,5px; }
        .Direitos{font-size: 12px; font-family: Arial; color: white;}
        </style>

    </div><!-- Fim da div Rodapé -->

    </div><!-- Fim da div global -->
    
</body>
</html>