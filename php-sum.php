<?php

function test($a, $b){
    if($a != $b){
        echo "\n".($a + $b);
    }else{
        echo "\n".(3*($a+$b));
    }
}

test(1,2);
test(2,2);
test(2,3);
