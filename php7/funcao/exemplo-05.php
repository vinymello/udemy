<?php

// Parâmetro por Valor vs por Referência

$a = 10;
// $ indica passagem de valor por referência
function trocaValor(&$b){
	$b += 50;
	return $b;
}

echo trocaValor($a);
echo "</br>";
echo $a;

?>