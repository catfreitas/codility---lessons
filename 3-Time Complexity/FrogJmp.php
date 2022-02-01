<?php

function solution($X, $Y, $D) {

    //Distance between X and Y

    //Divide the distance for D and get the round number (?) result = 3,2 -> get 4 jumps

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