<?php
 
 echo "Input the number of elements to be stored in the array  \n";


echo "\nInput elements in the array : ";

 
 
$arr = explode(' ', readline());
 

 
print_r($arr);

$arr = array(' ');

echo "\n";

echo "Expected Output : \n";
echo "Total number of duplicate elements found in the array is : ";
echo count($arr);

?>