<?php
include("config/pdo.php");
$id = $_GET['id'];
$sql = "SELECT * FROM noticias WHERE id = {$id}";
$noticia = $dbh->query($sql)->fetch();
#$noticia = $noticias[0];
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
	<h1><?php echo $noticia['titulo'] ?></h1>
	<p>
		<a href="index.php">Listar notícias</a>
	</p>

	<p>
		<?php echo nl2br($noticia['texto']) ?>
	</p>
</body>
</html>
