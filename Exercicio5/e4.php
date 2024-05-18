<?php

$arrayA =[];
$arrayB =[];
$arrayC =[];

for($i=1;$i<=10;$i++){
    
    $valor= readline("Digite um numero para o arrayA:  ");
    $valor = (int) $valor;
    
    if($valor <0){
        echo"Voce digitou um valor menor que 0 !";
        break;
   }else{
   
        $arrayA[]=$valor;

   }

}


$valorB = readline("Digite o divisor: ");
$arrayB = [(int) $valorB];

foreach($arrayA as $multiplicacoes){
   $arrayC[]= $multiplicacoes * $arrayB[0];

}

print_r($arrayC);