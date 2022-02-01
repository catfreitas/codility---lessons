<?php

//Encontrar o valor em falta!

function solution($N) {

    $length = count($N);
    sort($N);

    if($length >= 1){
        if($N[0] !== 1){
            return 1;
        }

        if($length === 1){
            return ($N[0] + 1);
        }

        for ($i=0; $i < ($length - 1) ; $i++) { 

            if($N[$i + 1] - $N[$i] > 1){
                return $N[$i] + 1;
            }

            if($i === ($length - 2)){
                return $N[$i] + 2;
            }
        }
    }

    return 1;
}

$A = [];

solution($A);

?>