<?php  // O código a baixo é responsável por fazer a consulta no banco de dados
include 'connect.php';
$sql = mysqli_query($link, "SELECT * FROM tb_postar ORDER BY id_usuario DESC");
	while($line = mysqli_fetch_array($sql)){
		$titulo = $line['titulo'];
		$foto = $line['foto'];
		$texto = $line['texto'];
		$data = $line['dt'];
		$id_postar = $line['id_postar'];
		$hora = $line['hr'];
?>
<!-- Após feita a consulta, o código a baixo leva a postagens para página principal "Index.php "-->
<h1 class="conteudo"></h1><!--Postagens dentro do conteúdo principal-->
<h1 class="titulo"><?php echo $titulo;?></h1>
<img src="postagens/<?php echo "post"."/".$foto;?>"class="Imagem">
<p class="texto"><?php echo $texto;?></p>
<span class="Data" class="hora"><?php echo date('m/d/y',strtotime ($data));echo" | ".$hora;?></span>

<style type="text/css"> /* Configuração dos campos com css */
   .titulo{font-size: 15px; font-family: broadway; padding: 2px; margin: 10px 5px;}
   .Imagem{width: 100%; margin: 2px; height: 40%; padding: 2px;}
   .texto{font-size: 13px; font-family: Times New Roman; margin: 5px; text-align: justify;}
   .Data{font-size: 10px; font-family: Times New Roman; margin: 5px;}
</style>

<?php  

} 

?>