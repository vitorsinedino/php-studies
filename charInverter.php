<?php

function charRemoval($a)
{
    $saver = "";
    $leng = strlen($a);
    if ($leng > 1) {
        $saver = $a[0];
        $a[0] = $a[$leng - 1];
        $a[$leng - 1] = $saver;
        echo "\n" . $a;
    } else {
        echo "\n" . $a;
    }
}

charRemoval("abcd");
charRemoval("a");
charRemoval("xy");
