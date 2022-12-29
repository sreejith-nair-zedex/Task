<?php
$str = "abcdefg";
echo $str . "<br>";
if ((strlen($str)%2)!=0) {
    $str.="_";
}
echo $str . "<br>";
$str = str_split($str,2);
print_r($str);