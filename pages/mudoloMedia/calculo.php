<?php

function calculoMedia($n1, $n2, $n3, $n4){

    //declaracao de variaveis locais 

    $nota1 = (double) $n1;
    $nota2 = (double) $n2;
    $nota3 = (double) $n3;
    $nota4 = (double) $n4;
    $result = (double) 0;

    
    $result = ($nota1 +  $nota2 + $nota3 + $nota4) / 4;  

    return $result ;
}
?>