<?php

$condicao = true;
// Executa algo até que a condição entre parenteses seja falsa
while ($condicao){
	// função rand gera números aleatórios
	$numero = rand(1, 10);
	if (numero === 3){
		echo "TRÊS!!!";
		$condicao = false;
	}
	echo $numero;
}

?>