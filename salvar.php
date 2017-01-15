<?php
include("config/pdo.php");

// Salvar a notícia no banco de dados
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];

$sql = "INSERT INTO noticias (titulo, texto) VALUES ('$titulo', '$texto');";
$dbh->exec($sql);

header("Location: index.php");
?>
