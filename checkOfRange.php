<?php
echo 'Write your code here';

function checkOfRange($a){
    
    return (abs(100-$a) <= 10) || (abs(200-$a) <= 10);
}
var_dump(checkOfRange(103));
var_dump(checkOfRange(83));
var_dump(checkOfRange(203));
