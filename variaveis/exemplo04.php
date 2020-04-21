<?php
// colocar na url a uri ?a=123 após o endereço
$nome = (int)$_GET["a"];  //O (int) força o tipo de variável se tornar do tipo integer
// As variáveis pré definidas $_GET e $_POST sempre retornan strings

var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];

//echo $ip;

?>
