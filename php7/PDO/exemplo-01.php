<?php
// Variaveis
/*
$dbtype = "mysql:dbname=dbphp7;host=localhost";
$dbuser = "root";
$dbpass = "";
*/
// Conexão ao Banco de Dados
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
// Prepara o comando a ser executado no Banco de Dados
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
// Executa o comando
$stmt->execute();
// Guarda o conteudo recebido do BD numa variável
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Melhorando a visualização
foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>".$key.": </strong>".$value."</br>";
	}
	echo "============================================================</br>";
}
// Imprime na tela
var_dump($results);
?>