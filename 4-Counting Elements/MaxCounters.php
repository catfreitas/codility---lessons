<?php

function solution($N, $A) {

    if(in_array(0, $A) || $N <= 0){
        return false;
    }


    $counters = array_fill(0, $N, 0);

    for ($i=0; $i < count($A) ; $i++) { 
        if($A[$i] >= 1 && $A[$i] <= $N){
            $counters[$A[$i]-1]++;

            print_r($counters);
        }

        if($A[$i] === $N + 1){
            $maximo = max($counters);
            $counters = array_fill(0, $N, $maximo);

            print_r($counters);
        }
    }

    print_r($counters);
}

$N = 5;
$A = [3,4,4,6,1,4,4];

solution($N, $A);

//100% Correctness
//40% Performance
//66% Avaluation

?>