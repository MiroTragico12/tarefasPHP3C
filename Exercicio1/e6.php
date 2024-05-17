<?php

$base = readline("Digite a base do ratangulo: ");
$altura = readline("Digite a altura do retangulo");

$area = $altura * $base;

$perimetro = ($altura + $altura)+($base + $base);

$diagonal = ($altura * $altura) + ($base * $base);

$diagonalResultado  = sqrt($diagonal);

echo "\n"; 

echo "O resultado do perimetro eh".number_format($perimetro, 2, '.');
echo "\n"; 

echo "O resultado da area eh".number_format($area, 2, '.');
echo "\n"; 

echo "O resultado da diagonal eh".number_format($diagonalResultado, 2, '.');
echo "\n"; 