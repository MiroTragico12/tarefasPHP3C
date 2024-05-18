<?php

$arrayA =[];

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


$arrrayReverse = array_reverse($arrayA);

print_r($arrrayReverse);