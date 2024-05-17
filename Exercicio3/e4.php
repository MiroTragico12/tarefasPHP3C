<?php

$valor =49;

  while($valor <70){
    $valor++;
   
   echo $valor;
   echo "\n";
   
   if($valor % 2 == 0){
    $soma += $valor;
    $i++;
   }
  }
 
  $quantidade =$i-1;  
  $media = $soma /$quantidade;
  echo "\n";
  echo"a soma foi de $soma";
  echo "\n";
  echo "Foram digitados $quantidade numeros diferentes";
  echo "\n";
  echo"a media foi de $media";