<?php

$array = array(1,2,3,7,6);
// sort($array);

$missings = array();

for($i=0; $i<10; $i++) 
{
    if(in_array($i,$array))
        continue;
    else
        array_push($missings, $i);
}

echo "input values in array are :";
foreach($array as $input)
{
    echo $input." , ";
}

echo "<br>missing values in array are :";
foreach($missings as $missing)
{
    echo $missing." , ";
}