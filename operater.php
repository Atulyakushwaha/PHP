<?php
$arr=[1,3,4,5,6,7,8];
foreach($arr as $value){
    echo "values".$value;
    echo "<br>";
}
$arr1 =[0=> "atulya",1=> "amit",2=>"rohit"];
foreach($arr1 as $key =>$values){
    echo "<br> $key => $values<br>";
}
$array = new SplFixedArray(3); 
 
$array[0] = 1; 
$array[1] = 2; 
$array[2] = 3; 
// RuntimeException 
print_r($array);
// Increase the size of the array to 10 
$array->setSize(10);
$array[3] = 4; 
print_r($array);

$ord = ['a', 'b']; // equivalent to [0 => 'a', 1 => 'b'] 
 
array_key_exists(0, $ord); // true 
array_key_exists(2, $ord); // false

$fruits = ['banana', 'apple']; 


//The function in_array()
$foo = in_array('banana', $fruits); 
// $foo value is true 
echo "<br>".$foo;
 
$bar = in_array('orange', $fruits); 
// $bar value is fals


//You can also use the function array_search() 
$userdb = ['Sandra Shush', 'Stefanie Mcmohn', 'Michael']; 
$pos = array_search('Stefanie Mcmohn', $userdb); 
if ($pos !== false) { 
    echo "Stefanie Mcmohn found at $pos"; 
}

?>