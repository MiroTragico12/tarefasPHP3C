<?php

$par=[];
$impar=[];
$negativo=[];
$positivo=[];

    for( $i= 1; $i<=10;$i++){
    $numero =(int) readline("Digite um numero ");
        $array[]=$numero;

    } 

    foreach($array as $numeroLista){

        if($numeroLista % 2 ==0){
            $par[] = $numeroLista;
        }if($numeroLista %2 !=0){
            $impar[]= $numeroLista;
        }if($numeroLista <0){
            $negativo[]= $numeroLista;
        }if($numeroLista >0){
            $positivo[]= $numeroLista;
        }

    }

    echo"Par";
    print_r($par);

    echo"impar";
    print_r($impar);

    echo"negativo";
    print_r($negativo);

    echo"positivo"; 
    print_r($positivo);