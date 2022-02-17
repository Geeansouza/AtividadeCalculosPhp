<?php
    /*******************************************************************************************
     * Objetivo: Arquivp de funções matemáticas que poderá ser utilizado dentro do projeto
     * Autor: Gean
     * Data: 04/02/2022
     * Versão: 0.1
     *******************************************************************************************/

	//criando funcão para calcular as operações matemáticas

    function tabuada ($n1, $n2){
        $num1 = (double) $n1;
        $num2 = (double) $n2;
        $result = (double)0;
        $cont = (double)0;

        for($cont++; $cont<$num2;){

        $result = $num1 * $cont;

        return $result;

        }

    }
?>