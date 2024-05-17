<?php

$num1 = readline("digite o primeiro numero:");
$num2 = readline("digite o segundo numero: ");

$resultado = $num1 / $num2;
$resto = $num1 % $num2;

echo "\n";

echo "o resultado de $num1 / $num2 e $resultado";
echo "\n";

if ($resto != 0) {
    echo "o resto da divisao eh $resto";
} else {
    echo " nao tem resto.";
}

