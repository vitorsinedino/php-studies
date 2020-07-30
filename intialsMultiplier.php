<?php

function initialRemoval($a)
{
    $multi = "";
    if(strlen($a)<2){
        for($i = 0; $i<4; $i++){
            $multi = chunk_split($a, 2);
        }
        echo "\n".(4*$multi);
    }else{
        echo "\n".$a;
    }
}

initialRemoval("C sharp");
initialRemoval("JS");
initialRemoval("a");
