<?php
/*
$anoNascimento = 1985;

$nomeCompleto = "Vinicius Mello dos Santos";
*/
// Comentário de linha: Na linha de baixo temos uma variável com número no nome.  
$nome1 = "Vinicius";
$sobreNome = "Mello";

// Concatenação de variáveis
$nomeCompleto = $nome1 . " " . $sobreNome;

echo $nomeCompleto;

// Para parar a execução neste ponto
exit;

/* 
Comentário de parágrafo 
*/

echo $nome1;

echo "</br>";

// unset apaga uma variável
unset($nome1);

// Para não exibir erro, ou definir o que quer que aconteça, na tela caso a varável não exista.
if (isset($nome)){
	echo $nome1;
}

?>