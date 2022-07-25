<?php

$nome = "vinicius mello";

// Transforma tudo para maiusculas
$nome = strtoupper($nome);
echo $nome;
echo "</br>";

// Transforma tudo para minusculas
$nome =  strtolower($nome);
echo $nome;
echo "</br>";

// Transforma a primeira letra de cada palavra em Maiuscula
$nome =  ucwords($nome);
echo $nome;
echo "</br>";

// Transforma a primeira letra da linha / parágrafo
$nome =  ucfirst($nome);
echo $nome;
echo "</br>";

?>