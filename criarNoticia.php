<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Aplicação PHP - Conhecimento Digital</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Criar notícia</h1>
	<p>
		<a href="index.php">Listar notícias</a>
	</p>

	<form method="POST" action="salvar.php">
		<p>
			<label for="titulo">Título: </label>
			<input id="titulo" name="titulo">
		</p>
		<p>
			<label for="texto">Texto: </label><br/>
			<textarea id="texto" name="texto" rows="20" cols="60"></textarea>
		</p>
		<button type="submit">Salvar</button>
	</form>
</body>
</html>
