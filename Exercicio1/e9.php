<?php

$numerador = readline("Digite o numerador da fração: ");
$denominador = readline("Digite o denominador da fração");

$resultado = $numerador / $denominador;

echo "O numero decimal eh ".number_format($resultado, 2, '.');

