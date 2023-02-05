<?php
$array = array(1,2,3,4,5,6);

$sumOfEven = 0;
$sumOfodd = 0;
$productOfEven = 1;
$productOfOdd = 1;

for($i = 0; $i < count($array); $i++) 
{
    if(($array[$i]%2) == 0)
    {
        
        $sumOfEven = $sumOfEven + $array[$i];
        $productOfEven = $productOfEven * $array[$i];
    }
    else
    {
        $sumOfOdd = $sumOfOdd + $array[$i];
        $productOfOdd = $productOfOdd * $array[$i];
    }
}

echo "Sum of Even numbers in list is " . $sumOfEven ."<br>";
echo "Sum of Odd numbers in list is " . $sumOfOdd ."<br>";
echo "Product of Even numbers in list is " . $productOfEven ."<br>";
echo "product of Odd numbers in list is " . $productOfOdd ."<br>";