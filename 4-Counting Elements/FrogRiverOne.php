<?php

function solution($X, $A) {

    //Filtrar o array pelos valores unicos (retirar repetidos) para um novo array
    //Quando o tamanho do novo array torna-se igual ao número de folhas (X), quer dizer que temos as folhas em todas as posições
    // retorno esse último valor
    //caso contrário -1

    if((count($A) >= $X) && (count($A) >= 1)){
        $array = array_unique($A);

        if(count($array) < $X){
            echo -1;
            return -1;
        }

        $result = array_keys($array);
        /* sort($result); */
    
        print_r($array);
        print_r($result[count($result) - 1]);
 
        return $result[count($result) - 1];
    }

    echo -1;
    return -1;
}

/* $M = 8;
$K = [1, 3, 1, 4, 7, 3, 5, 4, 8, 3, 8, 2, 6]; */

/* $M = 1;
$K = [1]; */

/* $M = 22;
$K = [4,3,6,5,8,4,6,4,6,5,2,3,1,4,6,4,4,8,6,22,3,6,9,9,8,8,2,3,5,4,9,22]; */

/* $M = 2;
$K = [2,2,2,2,2]; */

/* $M = 2;
$K = [2,2,2,2,2]; */

$X = 5;
$A = [1,3,1,4,2,3,5,4];

solution($X, $A);

?>