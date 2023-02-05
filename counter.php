<?php

$array = array(1,1,2,3,3,0,2,11,11,11,11);

$count = array_count_values($array);


echo "input values in array are :";
foreach($array as $input)
{
    echo $input." , ";
}
echo "<br>number of reputitions in array .<br>";
// print_r($counters);


foreach( $count as $key => $value )
{
    echo $key." => ".$value."<br>";
}
