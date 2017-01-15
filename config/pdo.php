<?php
/* Estamos trabalhando com o PDO 
Mais detalhes:  http://php.net/manual/pt_BR/book.pdo.php
*/

// Configurações do banco de dados
$host = "localhost";
$usuario = "root";
$senha = "123";
$banco = "sistema_noticias";

$dbh = new PDO("mysql:host={$host};dbname={$banco}", $usuario, $senha);
$dbh->exec("SET names UTF8");
