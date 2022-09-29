<?php

echo "Input the number of elements to be stored in the array : ";


echo "\n Input elements in the array :";

$arr = explode(' ', readline());
 
print_r($arr);


$fr = array_fill(0, count($arr), 0);
$check = -1;
for($i = 0; $i < count($arr); $i++)
{
$count = 1;
for($j = $i+1; $j < count($arr); $j++)
{
if($arr[$i] == $arr[$j]) 
{
$count++;

$fr[$j] = $check;
}
}
if($fr[$i] != $check) 
$fr[$i] =$count;
}
echo("The Array Elements are: ");

foreach( $arr as $b )
{
echo $b."  ";
}

echo "\n";

echo ("Expected Output : " );

echo "\n";

echo ("The frequency of all elements of an array : " );
for( $i = 0; $i < count($fr); $i++)
{
if($fr[$i] != $check)
{
    
echo "\n";

echo( $arr[$i] ." occurs " );
echo( $fr[$i]." times.");
echo(" ");
}
}
return 0;
?>