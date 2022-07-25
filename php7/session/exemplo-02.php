<?php

require_once "config.php";
// Apaga uma variável de sessão
session_unset($_SESSION['nome']);

echo $_SESSION['nome'];
// Apaga e remove a variável
session_destroy($_SESSION);

?>