<?php

$multiplicador = 1;

for ($i = 1; $i <=4; $i++) { 
    $scanf = readline("digite o $i numero:");
    $peso =  $scanf *$multiplicador;
    $array[]=$peso;
    $multiplicador++;
    $somaMult = $multiplicador+$multiplicador;
    echo"\n";
 
}   
echo"\n";


$num1 = $array[0];
$num2 = $array[1];
$num3 = $array[2];
$num4 = $array[3];

echo"\n";

$resultado = ($num1 + $num2 + $num3 + $num4)/$somaMult;

echo "a media eh : $resultado";

