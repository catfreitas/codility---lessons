<?php

function solution($A, $K) {

    if($A != []){
        $ALength = count($A);
        $lastNumber = 0;

        if(($ALength == $K) || ($K % $ALength == 0)){
            print_r($A);
        }else{
            
            for ($i=0; $i < $K ; $i++) { 
                $lastNumber = $A[$ALength - 1];

                array_pop($A);
                array_unshift($A, $lastNumber);
            }

            print_r($A);
        }
    }

    print_r($A);
    
}
/* $B = [3, 8, 9, 7, 6]; */
$B = [];
$C = 15;

solution($B, $C);

?>