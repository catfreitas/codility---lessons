<?php

function solution($A) { 
    $A = array_unique($A);
    $A = array_filter($A, 'filterArray');
    
    sort($A);
    print_r($A);

    if($A == [] || $A[0] != 1){
        echo 1;
        return 1;
    }
    
    for ($i=1; $i < count($A); $i++) { 
        if(($A[$i] - $A[$i-1]) > 1){

            echo $A[$i-1] + 1;
            return $A[$i-1] + 1;
        }
    }

    echo $A[count($A)-1] + 1;
    return $A[count($A)-1] + 1;
   
}

function filterArray($k){
    return ($k > 0);
}

/* $K = [1,3,6,4,1,2]; */
$M = [-1,2,-3,1, 3, 4, 5, 10000000];

solution($M);

?>