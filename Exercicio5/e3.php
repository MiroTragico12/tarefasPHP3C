<?php 

$maiorNumero = null;
$array=[];

for($i=1;$i<=10;$i++){
    
    $valor= readline("Digite um numero positivo: ");
    $valor = (int) $valor;
    
    if($valor <0){
        echo"Voce digitou um valor menor que 0 !";
        break;
   }else{
   
        $array[]=$valor;
        if ($maiorNumero === null || $valor > $maiorNumero) {
            $maiorNumero = $valor;
        }
    
   }
}   



print_r($array);

echo "O maior número é: $maiorNumero\n";
