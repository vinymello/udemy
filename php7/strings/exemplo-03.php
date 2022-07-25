<?php

/* Funções com Strings */

$empresa = "Hcode";

// Substitui caracteres ou parte da string por outra coisa. 
$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);

echo $empresa;

?>