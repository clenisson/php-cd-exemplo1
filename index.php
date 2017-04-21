<?php 
include("config/pdo.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Aplicação PHP - Conhecimento Digital</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Sistema de notícias</h1>
	<p>
		<a href="criarNoticia.php">Criar notícia</a>
	</p>

	<?php
	$noticias = $dbh->query("SELECT * FROM noticias");	
	?>

	<?php
	if ($noticias->rowCount() > 0): 
	?>
	<ul>
		<?php foreach ($noticias as $n): ?>
			<li>
				<a href="noticia.php?id=<?php echo $n['id']; ?>" title="Clique para ver a notícia"><?php echo $n['titulo']; ?></a>
				<a href="excluir.php?id=<?php echo $n['id']; ?>" onclick="if(!confirm('Tem certeza?')){return false;}">Excluir notícia</a>
			</li>
		<?php endforeach ?>
	</ul>	
	<?php
	else: 
	?>

	Infelizmente, não há notícias a serem exibidas	

	<?php
	endif
	?>
</body>
</html>
