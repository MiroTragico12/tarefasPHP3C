<?php
$valor = readline("Digite um valor: ");

if($valor >=30 && $valor <= 90){
    echo"$valor esta entre 30 e 90";
}else if($valor >=120){
    echo"$valor é maior que 120";
}else{
echo "$valor nao se encaixa em valor algum";
}