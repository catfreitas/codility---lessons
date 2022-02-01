<?php

function solution($A) { 
    if(max($A) < 1 || $A == []){
        return 0;
    }

    $B = array_unique($A);
    
    $lengthA = count($A);
    $lengthB = count($B);

    //3ªcondição para o caso [1,1,2]
    if($lengthA >= 1 && $lengthA === max($A) && count($A) === count($B)){
        return 1;
    }

    return 0;
   
}

$K = [9, 5, 7, 3, 2, 7, 3, 1, 10, 8];

solution($K);

?>