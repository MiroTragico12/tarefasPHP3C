<?php

$valor = readline("Valor da compra: ");
$codCompra = readline("Codigo da compra: ");

if($codCompra == 1){
    $valor1 = $valor *0.90;
    echo "valor da compra eh: $valor1";
}else if($codCompra ==2){
    $valor2 = $valor *0.95;
    echo "valor da compra eh: $valor2";
}else if($codCompra ==3){
    $valor3 = $valor /2;
    echo "valor da compra eh 2x de: $valor3";
}else if($codCompra ==4){
    $valor4 = $valor /3;
    echo "valor da compra eh 3x de: $valor4";
}