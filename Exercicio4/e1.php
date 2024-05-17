@@ -0,0 +1,46 @@
<?php

function soma($num1, $num2){
    return $num1 + $num2;
}

function subtracao($num1, $num2){
    return $num1 - $num2;
}

function multiplicacao($num1, $num2){
    return $num1 * $num2;
}

function divisao($num1, $num2){
    if ($num2 != 0) {
        return $num1 / $num2;
    } else {
        return "Erro: divisão por zero.";
    }
}

$operacao = readline("Digite a operação (soma, subtracao, multiplicacao ou divisao): ");
$num1 = (int)readline("Digite o primeiro número: ");
$num2 = (int)readline("Digite o segundo número: ");

$resultado = 0;

switch ($operacao) {
    case 'soma':
        $resultado = soma($num1, $num2);
        break;
    case 'subtracao':
        $resultado = subtracao($num1, $num2);
        break;
    case 'multiplicacao':
        $resultado = multiplicacao($num1, $num2);
        break;
    case 'divisao':
        $resultado = divisao($num1, $num2);
        break;
    default:
        echo "Operação inválida.";
}

echo "O resultado da operação $operacao é: $resultado\n";