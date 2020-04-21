<?php
// colocar na url a uri ?a=123 após o endereço
$nome = (int)$_GET["a"];
//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];

echo $ip;

?>
