<?php

function diffrence($a){
    if($a > 51){
        $a = ($a-51) * 3;
        echo "\n".$a;
    }else{
        echo "\n".(51-$a);
    }   
}

diffrence(53);
diffrence(50);
diffrence(51);
