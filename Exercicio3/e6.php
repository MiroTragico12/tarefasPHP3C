<?php




while (true){

    $nota1= readline("Digite a nota 1: ");
    $nota2= readline("Digite a nota 2: ");
    echo "\n";
    $nota1 = (int) $nota1;
    $nota2 = (int) $nota2;


    if( $nota1 >= 0 && $nota1 <=10 && $nota2 <= 10 && $nota2 >=0){
        $media = ($nota1 + $nota2)/2;
        if($media >=6){
            echo "\n";
            echo"Sua media foi $media, voce foi aprovado";
        }else if($media <6){
            echo "\n";
            echo "Sua media foi $media, voce foi reprovado";
        }
    } else {
        echo "As notas devem estar entre 0 e 10. Por favor, digite novamente.\n";
        continue; 
    }
    echo "\n";
    
    $novoCalculo = readline("NOVO CALCULO ?(S/N)");
    
    if($novoCalculo ==='S'|| $novoCalculo !=='s'){
        break;
    }
}
