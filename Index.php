<!DOCTYPE html>
<html>
<head>
    
    <title>Jornal_TI</title>
    <link rel="stylesheet" type="text/css" href="css/formato.css">

</head>
<body>

    <div id="Global"><!-- Inicio da div global -->

    <?php include 'connect.php' ?>

    <div id="Topo"><!-- Inicio da div top -->

        <!-- Titulo da aplicação -->
        <h1 class="Titulo">JTi_notícias<a class="Subtitulo">JORNAL TECNOLOGIA DA INFORMACAO</a></h1>
                
        <!-- Configuração com CSS do Topo, Titulo e Subtitulo -->   
        <style type="text/css">
        #Topo{width: 100%; height: 70px; background-color: brown; margin: 5px,5px; }
        .Titulo{font-size: 60px; font-family: broadway; font-style:italic; margin: 5px; margin-top: 3px; color: honeydew;}
        .Subtitulo{font-size: 12px; font-family: broadway; float: right; margin: 8px; margin-top: 28px;}

        </style>
            
    </div><!-- Fim da div topo -->

    <div id="Cardapio" align="center"><!-- Inicio da div Menu -->

        <h2 class="Menu">MENU</h2><!-- Menu e links de acesso -->

        <button onclick="alert('Fazer Login')"><a href="Form_login.php" class="Botões_menu" style="text-decoration: none">ADMINISTRADOR</button>

        <style type="Text/css">/* Configuração do Menu e links */
        #Cardapio{width: 10%; min-height: 500px; float: left; border: 1px solid gray; margin: 5px 1px}
        .Menu{font-size: 20px; font-family: broadway; margin: 5px; color: white; background-color: brown;}
        .Botões_menu{width: 10%; font-size: 12px; font-family: Arial; color: white; background-color: brown; border-radius: 10px;}
        .Botões_menu:hover{background-color: gray;}/* Muda a cor do link quando o mause passa */
        </style>

    </div><!-- Fim da div Menu -->

    <div id="Conteudo"><!-- Inicio da div Conteúdo -->

        <?php // Responsável pelas postagens principais //
        include "Cont_post.php";
        ?>

       <style type="text/css"> /* Configuração dos campos com css */
       #Conteudo{width: 50%; height: auto; float: left; border: 1px solid lightgray; background-color: white; margin: 5px 15px 5px;} 
      .titulo{font-size: 15px; font-family: broadway; padding: 2px; margin: 10px 5px; color: black;}
      .Imagem{width: 100%; margin: 2px; height: 40%; padding: 2px;}
      .texto{width: 90%; font-size: 15px; font-family: Times New Roman; margin: 5px; color: black;}
      .Data{font-size: 10px; font-family: Times New Roman; margin: 5px; color: black;}
      </style>

    </div><!-- Fim da div conteúdo -->

    <div id="Conteudo_II"><!-- Inicio da div Conteudo_I -->

        <?php // Responsável por outras postagens //
        include "Cont_post_II.php";
        ?>

        <style type="text/css"> /* Configuração dos campos com css */
        #Conteudo_II{width: 37%; height: auto; float: right; border: 1px solid lightgray; background-color: white; margin:5px 1px;} 
       .titulo{font-size: 15px; font-family:Times New Roman; padding: 2px; margin: 10px 5px;}
       .Imagem{width: 90%; margin: 2px; height: 40%; padding: 2px;}
       .texto{font-size: 15px; font-family: Times New Roman; margin: 5px;}
       .Data{font-size: 10px; font-family: Times New Roman; margin: 5px;}
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