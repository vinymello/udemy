<?php

/* Arquivo Principal */

// Adiciona o arquivo de funções neste arquivo para as funções estarem disponíveis neste arquivo
//include "inc/exemplo-01.php";

// Igual o include. Porém, este exige que o arquivo seja incluido e esteja funcionando. Caso contrário, o arquivo atual não executa. 
//require "inc/exemplo-01.php";

// Evita que o arquivo seja incluido mais de uma vez
require_once "inc/exemplo-01.php";

$resultado = somar(10, 20);

echo $resultado;

?>