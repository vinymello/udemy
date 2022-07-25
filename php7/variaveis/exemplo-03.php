<?php

/* Tipos de variáveis */

// Variáveis Simples

// Strings
$nome = "Hcode";
$site = 'www.hcode.com.br';
// Numeros Inteiros
$ano = 1990;
// Numeros Flutuantes
$salario = 5500.99;
// Booleano
$bloqueado = false;

/////////////////////////////////////////////////////

/* Variáveis Complexas */

// Arrays
$frutas = array("abacaxi", "laranja", "manga");
// Imprime apenas um dado do array
echo $frutas[2];

echo "</br>";

// Orientado a um Objeto (POO)
$nascimento = new DateTime();

var_dump($nascimento);
echo "</br>";
echo "</br>";

/////////////////////////////////////////////////////

/* Variáveis Especiais */

// Variável de Arquivo
$arquivo = fopen("exemplo-03.php", "r");

var_dump($arquivo);
echo "</br>";
echo "</br>";

// Variável nula.
$nulo = NULL;

// Variável vazia. 
$vazio = "";

?>