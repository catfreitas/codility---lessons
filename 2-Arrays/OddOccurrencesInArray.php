<?php

function solution($A) { 

   foreach (array_count_values($A) as $number => $count) {
       if($count % 2 !== 0){
           return $number;
       }
   }

   return 0;
}

$K = [4,6,3,4,6];

solution($K);

?>