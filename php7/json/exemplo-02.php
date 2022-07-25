<?php

$json = '[{"nome":"Vinicius","idade":"36"},{"nome":"Joao","idade":"20"}]';
// Transforma um JSON am ARRAY
$data = json_decode($json, true);

var_dump($data);

?>