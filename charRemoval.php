<?php

function charRemoval($a)
{
    $string = "python";
    for ($i = 0; $i < strlen($string) - 1; $i++) {
        if ($i == $a) {
            echo "\n";
            echo str_replace($string[$a], "", $string);
        }
    }
}

charRemoval(1);
charRemoval(0);
charRemoval(4);
