<?php
$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$arr2 = [3, 2, 4, 6, 7, 8, 1, 9];

function sortFunc($arr)
{
    for ($i=1; $i < count($arr); $i++) { 
        if ($arr[$i]>$arr[$i-1]) {
            
        }
    }
}

if (count($arr1) == count($arr2)) {
    echo 0;
} else {
    sort($arr2);
    for ($i = 0; $i < count($arr2); $i++) {
        if ($arr1[$i] != $arr2[$i]) {
            echo $arr1[$i];
            break;
        }
    }
}
