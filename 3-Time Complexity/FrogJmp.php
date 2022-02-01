<?php

function solution($X, $Y, $D) {

    if(
        ($X >= 1 && $X <= 1000000000) &&
        ($Y >= 1 && $Y <= 1000000000) && 
        ($D >= 1 && $D <= 1000000000) &&
        ($X <= $Y))
        {
            $distance = $Y - $X;    
    
            $jumps = $distance / $D;
    
            return intval(ceil($jumps));
        }
    
    return 0;
    
}

solution(10, 85, 30);

?>