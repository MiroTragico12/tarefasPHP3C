<?php 

$salarioMinimo = readline("Digite seu salario minimo:");

$valor100Kw = $salarioMinimo/7;

echo "\n";

echo"O valor a cada 100kw eh: ".number_format($valor100Kw, 2, '.');

echo "\n";

$valor1Kw = $valor100Kw /100;

echo "O valor por cada kw eh:".number_format( $valor1Kw,2,".");

echo "\n";

$quantidadeDeKwGasto = readline("Digite a quantidade de kw gasto no mes: ");

$valorFinalKw = $quantidadeDeKwGasto * $valor1Kw;

$valorFinalKwDesc = ($quantidadeDeKwGasto * $valor1Kw) * 0.90;

echo  "valor final sem desconto: ".number_format( $valorFinalKw,2,".");

echo "\n";

echo  "valor final com desconto: ".number_format( $valorFinalKwDesc,2,".");

echo "\n";

echo  "Seu salario minimo eh: ".number_format( $salarioMinimo,2,".");
