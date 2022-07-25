<?php

/* Precedencia de Operador */

$resultado = 10 + 3 / 2;
// Executa na ordem matemática
echo $resultado;
echo "</br>";

$resultado = (10 + 3) / 2;
// Executa primeiro os parenteses
echo $resultado;
echo "</br>";

// Operador Booleano (E / AND)
$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;
var_dump($resultado);
echo "</br>";

// Operador Booleano (OU / OR)
$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;
var_dump($resultado);
echo "</br>";

?>