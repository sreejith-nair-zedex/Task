<?php
$str = "1 gfhg fut uytuyt   uyuytttt 0 5";
$strArray = explode(" ", $str);
// print_r($strArray);
// echo "<br>";

$ans = 999999999999999999;
for ($i = 0; $i < count($strArray); $i++) {
    // echo $strArray[$i].":". strlen($strArray[$i]) . "<br>";
    if (strlen($strArray[$i])!=0) {
        if (strlen($strArray[$i]) > $ans) {
            continue;
        } else {
            $ans = strlen($strArray[$i]);
        }

    }
}
echo "answer : " . $ans;

// return shortest words