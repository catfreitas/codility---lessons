<?php

function solution($A) {

    if(count($A) >= 2){
        $counter = 0;
        $length = count($A) - 1;
        $totalArray = array_sum($A);
        $result = [];

        for ($i=0; $i < $length ; $i++) { 
            $counter += $A[$i];
            $result = min($result, abs(($totalArray - $counter) - $counter));
        }

        return $result;
    }
       
    if((count($A) === 1) || ($A === [])){
        return 0;
    } 
    
}

$K = [1, 1, 3];

solution($K);

?>