<?php
$array = [];
$i = 0;

while (true) {
    $valor = readline("Digite um valor (quando digitar 0 o programa para): ");
    echo "\n";
    
    
    $valor = (int) $valor;
    
   
    if ($valor === 0) {
        break;
    }
    
    $array[] = $valor; 
    $i++;
}

print_r($array);

$numeroMaior =max($array);
$numeroMenor =min($array);
echo "\n";
echo "O numero maior eh  $numeroMaior e o numero menor eh $numeroMenor";