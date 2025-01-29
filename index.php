<?php
$nome = "Joelson";
$idade = 49;
$altura = 1.72;
$casado = false;

echo "Nome" . $nome . "<br>";
var_dump($idade);
echo "<br>";
var_dump($altura);
echo "<br>";
var_dump($casado);
?>

<br><br>

<?php 
    $nota1 = 23;
    $nota2 = 53;
    $media = ($nota1 + $nota2) / 2;
    if ($media >= 7) {
    echo "Aprovado(a)! Sua média: " . $media;
    } else {
    echo "Reprovado(a)! Sua média: " . $media;
    }
    
?>

<br><br>

<?php
for ($i = 1; $i <= 10; $i++) {
echo $i . ", ";
}
echo "<br>";
// Usando while
$index = 1;
while ($index <= 10) {
echo $index . ", ";
$index++;
}
?>

<br><br>

<?php
$msg = "Hi, World!";
$msgInvertida = strrev($msg);
echo $msgInvertida;
?>

<br><br>

<?php
$pessoas = array(
"Jeff" => 23,
"Larry" => 19,
"Chris" => 29
);
foreach ($pessoas as $nome => $idade) {
echo "Nome: " . $nome . ", Idade: " . $idade . "<br>";
}
?>

<br><br>

<?php
require_once 'funcoes.php';
echo "A soma é " . somar(9, 4);
?>

<br><br>

<?php
$notas = array("Português" => 5.5, "Matemática" => 7.0, "Ciências" => 8.2);
$soma = 0;
$contador = 0;
foreach ($notas as $disciplina => $nota)
{
$soma += $nota; $contador++;
} $media = $soma / $contador;
echo "Média do aluno: " . $media; 
?>