<?php
////////////////////////////////////////////
// Tipo Simples
$nome = "Denis";
$site = 'www.hcode.com.br';

$ano = 2020;
$salario = 1000.00;
$bloqueado = false;

////////////////////////////////////////////
// Tipo Composto

$frutas = array("abacaxi", "laranja", "manga");
//echo $frutas[2];

$nascimento = new DateTime();
//var_dump($nascimento);

////////////////////////////////////////////
// Tipo Especial

$arquivo = fopen("exemplo03.php", "r");
var_dump($arquivo);


?>
