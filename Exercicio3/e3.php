<?php

$valor =1;

  while($valor !=0){
    $valor =readline("Digite um valor(quando digitar 0 o programa para): ");
    echo "\n";
    $soma +=$valor;
    $i++;
  }

$quantidade =$i-1;  
$media = $soma /$quantidade;
echo "A soma eh $soma";
echo "\n";
echo "Foram digitados $quantidade numeros diferentes";
echo "\n";
echo "A media eh $media";


