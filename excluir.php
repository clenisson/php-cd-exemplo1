<?php
include("config/pdo.php");

// Excluir a not�cia do banco de dados
$id = $_GET["id"];

$sql = "DELETE FROM noticias WHERE id = {$id}";
$dbh->exec($sql);

header("Location: index.php");
?>
