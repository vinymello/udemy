<?php

$frase = "A repetição é a mãe da retenção";
$palavra = "mãe";
// Retorna a posição na string que está o que se deseja encontrar
$q = strpos($frase, $palavra);
// Guarda a parte da string da posição inicial até a posição final, indicada. substr("String", "Posição Inicial", "Posição Final");
$texto = substr($frase, 0, $q);
var_dump($texto);
echo "</br>";
// strlen() retorna a quantidade de caracteres da string
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($texto2);

?>