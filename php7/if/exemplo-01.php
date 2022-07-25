<?php

/* Estruturas Condicionais */

$qualASuaIdade = 30;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca){
	echo "Criança";
} elseif ($qualASuaIdade < $idadeMaior){
	echo "Adolescente";
} elseif ($qualASuaIdade < $idadeMelhor){
	echo "Adulto";
} else {
	echo "Idoso";
}

echo "</br>";
// Ternário: echo ("Condição")?"Verdadeiro":"Falso";
echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

?>