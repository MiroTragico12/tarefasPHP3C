<?php

$valorCompra = readline("Digite o valor da compra: ");

if($valorCompra <20){
    $menor20 = $valorCompra * 1.45;
    echo"O valor da compra eh $menor20";
}else{
    $valorNormal = $valorCompra *1.30;
    echo"O valor da compra eh $valorNormal";
}