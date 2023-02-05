<?php
$variable1 = 12;
$variable2 = 14;

echo "variables before swap variable1 = " . $variable1 . " and variable2 = " . $variable2."";
echo"<br>";
$temp = $variable1;

$variable1 = $variable2;
$variable2 = $temp;

echo "variables after swap variable1 = " . $variable1 . " and variable2 = " . $variable2."";