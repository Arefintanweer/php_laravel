<?php 
#array manupulation
/*
    -array_push()
    -array_pop()
    -array_shift()
    -array_unshift()

*/
$array = ["fruit","Vegetables","Rice","Drinks",90,50,30,10];

$poppedElementFromLast = array_pop($array);
echo "popped element is : {$poppedElementFromLast}\n";
$poppedElementFromFirst = array_shift($array);
echo "popped element is : {$poppedElementFromFirst}\n";

for($i = 0; $i<count($array);$i++)
{
    echo "index {$i} : {$array[$i]}\n";
}
echo "===========================\n";

$pushedElementInLast = array_push($array,"Salad");
$pushedElementInFirst = array_unshift($array,"Water");

for($i = 0;$i<count($array);$i++)
{
    echo "index {$i} : {$array[$i]}\n";
}
echo "=====================\n";
#array is mutable 
$array[2]="Anything";
for($i = 0; $i<count($array);$i++)
{
    echo "index {$i} : {$array[$i]}\n";
}

