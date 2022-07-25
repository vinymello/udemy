<?php

// Parâmetros de Função

function ola($texto = "mundo", $periodo = "Bom dia"){
	return "Olá $texto! $periodo!</br>";
}

echo ola();
echo ola("Galucio", "Boa tarde");
echo ola("João", "Boa noite");

?>