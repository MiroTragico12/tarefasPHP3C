<?php 

$jogador1 = readline("jogador 1 digite um numero: ");
$jogador2 = readline("jogador 2 digite um numero: ");
$jogador3 = readline("jogador 3 digite um numero: ");

    if($jogador1 ==1 &&$jogador2 == 1 && $jogador3 =0){
        echo"jogador 1 e 2 vao para a final, disputando par ou impar !!";
        echo"\n";

            
        $jogador1 = readline("jogador 1 digite um numero: ");
        echo"\n";
        $jogador2 = readline("jogador 2 digite um numero:  ");
        
        }if($jogador1 ==1 &&$jogador2 == 0 && $jogador3 ==1){
        echo"jogador 1 e 3 vao para a final, disputando par ou impar !!";
        
            $escolhaParImpar1 = readline("jogador 1 digite se voce a par ou impar: ");
            echo"\n";
            $escolhaParImpar3 = readline("jogador 3 digite se voce a par ou impar: ");
            echo"\n";

            $jogarParImpar1 = readline("jogador 1 digite um numero: ");
            echo"\n";
            $jogarParImpar3 = readline("jogador 3 digite um numero: ");
            echo"\n";

            $resultado = $jogarParImpar1  + $jogarParImpar3  ;
            if($resultado % 2== 0 && $escolhaParImpar1==='par'){
                echo"jogador 1 venceu";
            }else if($resultado %2 == 0 && $escolhaParImpar3  ==='par'){
                echo"jogador 3 venceu";
            }else if($resultado %2 == 1 && $escolhaParImpar1 ==='impar'){
                echo"jogador 1 venceu";
            }else if($resultado % 2== 1 && $escolhaParImpar3 ==='impar'){
                echo"jogador 3 venceu";
            }

            }if($jogador1 ==0 &&$jogador0 == 1 && $jogador3 ==1){
                echo"jogador 2 e 3 vao para a final, disputando par ou impar !!";

                    $jogador2 = readline("Digite um numero: ");
                    $jogador3 = readline("Digite um numero: ");
            }


