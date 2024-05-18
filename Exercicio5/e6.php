<?php

$arrayA =[];
$arrayB =[];
$resultado=[];
for($i=0;$i<10;$i++){
    
   $valor= readline("Digite um numero para o arrayA:  ");
   $valor = (int) $valor;
   $arrayA[]=$valor;
   
}

for($i=0;$i<10;$i++){
    
    $valor= readline("Digite um numero para o arrayB:  ");
    $valor = (int) $valor;
    $arrayB[]=$valor;
    
    
 }


 for($i=0;$i<10;$i++){
    
    $resultado[]=$arrayA[$i] * $arrayB[$i];
    
    
 }

echo"Os resultados sao: ";
print_r($resultado);
