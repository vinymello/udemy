<?php

$pessoas = array();
// Adiciona informação a um array já existente
array_push($pessoas, array(
	'nome' => 'Vinicius',
	'idade' => '36'
));

array_push($pessoas, array(
	'nome' => 'Joao',
	'idade' => '20'
));
// Transforma um ARRAY em JSON
echo json_encode($pessoas);

?>