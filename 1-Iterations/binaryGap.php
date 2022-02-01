<?php

function solution($N) {
    $binary = decbin($N);
    $binary = trim($binary, "0");
    $zerosCounter = explode('1', $binary);

    usort($zerosCounter, function($a, $b){
	    return strlen($b)-strlen($a);
	});

    return strlen($zerosCounter[0]);
    
}


solution(4634);
/* solution(28); */

?>