<?php

$numeroFrutaComprada = readline("Digite um valor:");

if( $numeroFrutaComprada <12){
    $valorFrutaMenor12 = $numeroFrutaComprada *1.30;
    echo"Valor final da compra é: $valorFrutaMenor12 reais";
}else{
    $valorFrutaMaior12 = $numeroFrutaComprada *1.00;
    echo"Valor final da compra é: $valorFrutaMaior12 reais";
}