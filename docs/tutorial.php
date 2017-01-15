<?php
// Estrutura de um script PHP

// Os comentários podem ser feitos em uma única linha, com // à frente...
#  Comentários de linha única também podem ser feitos com sustenido ("hashtag") #

/*
Comentários de múltiplas linhas devem ser feitos entre essas estruturas
Início: barra + asterisco
Final: asterisco + barra
*/

# Exibindo texto na tela com "echo"
echo "Olá, mundo!"; // Toda instrução no PHP termina com ponto-e-vírgula
echo "<br/>"; # quebra delinha em HTML

# Criando variáveis: o identificador da variável deve ser precedido de $
$curso = "Lógica de Programação";
$local = "Conhecimento Digital";
$instrutor = "Clenisson Calaça";
$carga_horaria_em_horas = 40;

# Interpolação de variáveis - forma 1
echo "O curso é $curso, ministrado por $instrutor em $local e possui $carga_horaria_em_horas horas de carga horária";
echo "<br/>";

# Interpolação de variáveis - forma 2
echo "O curso é {$curso}, ministrado por {$instrutor} em {$local} e possui {$carga_horaria_em_horas} horas de carga horária";
echo "<br/>";

# Interpolação de variáveis - forma 3
echo "O curso é ".$curso.", ministrado por ".$instrutor." em ".$local." e possui ".$carga_horaria_em_horas." horas de carga horária";
echo "<br/>";

# Estruturas de seleção - if
echo "<strong>Estrutura de seleção IF:</strong> ";	
if ($carga_horaria_em_horas > 20) {
	echo "O curso possui mais de 20 horas!";
	echo "<br/>";
} else if ($carga_horaria_em_horas > 20 && $carga_horaria_em_horas < 50) {
	echo "O curso possui mais de 20 horas, e menos que 50!";
	echo "<br/>";	
} else {
	echo "O curso possui mais de 20 horas, e menos que 50!";
	echo "<br/>";	
}

# Estruturas de repetição - for
echo "<strong>Estrutura de repetição FOR:</strong> ";	
for ($i = 0; $i < 10; $i++) {
	echo $i;
}
echo "<br/>";	

# Estruturas de repetição - while
echo "<strong>Estrutura de repetição WHILE:</strong> ";	
$num = 0;
$max = 10;
while ($num < 10) {
	echo $num;
	$num++;
}
echo "<br/>";	

# Funções - são definidas com o operador "function"
echo "<strong>Função olaMundo():</strong> ";	
function olaMundo() {
	echo "Você chamou a função olá mundo!!";
}
olaMundo();
echo "<br/>";

/*
Arrays - coleção de valores de qualquer tipo.
As chaves também podem ser de qualquer tipo. Se não for especificada a chave, atribui um índice
numérico começando no número 0 (zero)

Há várias formas de se criar uma array 
*/
echo "<strong>Arrays: </strong>";

# índices numéricos atribuidos automaticamente
$alunos = ["João", "Maria", "José", "Raimunda"]; 
print_r($alunos);
echo "<br/>";

$alunos = array("João", "Maria", "José", "Raimunda");
print_r($alunos);
echo "<br/>";

# índices definidos manualmente
$aluno = [
	"nome" => "João",
	"sexo" => "Masculino",
	"idade" => 23
];
print_r($aluno);
echo "<br/>";

$aluno = array("nome" => "João", "sexo" => "Masculino", "idade" => 23);
print_r($aluno);
echo "<br/>";
?>


