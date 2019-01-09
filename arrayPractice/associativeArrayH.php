<?php
#key-value
#key can be only 1 int/string
#value can be only 1 int/string
#have to use foreach loop for easy iteration
$array1= [
    "vegetables" => "brocalli,Carrot",
    "Drinks" =>"water,milk"
];
echo count($array1)."\n";
echo $array1["vegetables"]."\n";
$array2 = [
    1 => "Arefin",
    2 => "Rafsan",
    3 => "Muraad"
];
echo count($array2)."\n";

$array3 = [
    "bookPrice" => 150,
    "foodprice" => 25,
];
echo "length of array3 is = ".count($array3)."\n";
echo $array3["bookPrice"]."\n";

foreach($array2 as $key=>$value)
{
    echo "key ".$key." "."values ".$value."\n";
}