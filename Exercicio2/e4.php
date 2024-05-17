
<?php 

$notaAvaliacao1 = readline("Digite a nota da avaliação um : ");
$notaAvaliacao2 = readline("Digite a nota da avaliação dois: ");


$mediaAritimetica = ($notaAvaliacao1 + $notaAvaliacao2)/2;

if ($mediaAritimetica < 6.00){
    echo "Com a media de $mediaAritimetica voce foi reprovado."; 
}else{
    echo "Com a media de $mediaAritimetica Voce foi aprovado";   
}