<?php

// Regenera o ID de sessão

require_once "config.php";

echo session_regenerate_id();

var_dump($_SESSION);

?>