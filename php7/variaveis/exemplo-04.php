<?php

/* Variáveis Pré Definidas ou Arrays Super Globais */

// Query
$nome = (int)$_GET["a"];
// http://localhost/udemy/php7/variaveis/exemplo-04.php?a=123
//var_dump($nome);

// IP Remoto
$ip = $_SERVER["REMOTE_ADDR"];
// Caminho/path atual
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>