<?php

echo "Input the number of elements to be stored in the array ";


echo "\nInput elements in the array : ";

$arr = explode(' ', readline());
 
print_r($arr);

echo "Input 5 elements in the array : ";

$oddArray = array();
$evenArray = array();

echo "\n";  


$size = count($arr);
for ($i = 0; $i < $size; $i++) {
    echo "$arr[$i] ";
}
$j = 0;
$k = 0;
for ($i = 0; $i < $size; $i++) {
    if ($arr[$i] % 2 == 0) {
        $evenArray[$j] = $arr[$i];
        $j++;
    } else {
        $oddArray[$k] = $arr[$i];
        $k++;
    }
}


echo "\n";  

echo "\nExpected Output : ";
echo "\nThe Even elements are : \n";
for ($i = 0; $i <= $j; $i++) { 
    
    
    
    echo "$arr[$i] ";
}


echo "\n";  


echo "\nThe Odd elements are : \n";
for ($i = 0; $i <= $k; $i++) {
    
    
    echo "$arr[$i] ";
}


?>