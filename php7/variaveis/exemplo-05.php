<?php

/* Escopo de Variável */

$nome = "Vinicius";

function teste(){
	// Para usar uma variável de fora da função
	global $nome;
	echo $nome;
}

function teste2(){
	$nome = "Joao";
	echo $nome . ": agora no teste 2";
}

teste();

echo "</br>";

teste2();

?>