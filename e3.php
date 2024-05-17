<?php

$array = [];
$tamanho = 10;


for ($i = 0; $i < $tamanho; $i++) {
    $numero = readline("Digite um numero: ");
    $array[] = $numero ; 
}

$slice = array_slice($array, PHP_INT_MAX);

print_r($slice);
echo "\n";