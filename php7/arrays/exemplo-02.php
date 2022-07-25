<?php

$carro[0][0] = "GM";
$carro[0][1] = "Cobalt";
$carro[0][2] = "Onix";
$carro[0][3] = "Camaro";
$carro[1][0] = "Ford";
$carro[1][1] = "Fiesta";
$carro[1][2] = "Fusion";
$carro[1][3] = "Eco Sport";

print_r($carro);
echo "</br>";
// Mostra a informação de uma posição exata do array
echo $carro[0][3];
// Função end traz a ultima posição do array
echo end($carros[1]);

?>