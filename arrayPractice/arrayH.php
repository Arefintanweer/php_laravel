<?php
#Declaring 1D/plained Indexed Array
$students = [
    "Rahim",
    "Karim",
    "Monir",
    1,
    2,
    3,
];
#getting array length by count function
$length = count($students);
#printing 1D Array by loop
for($i=0;$i<$length;$i++)
{
    echo $students[$i]." ";
}
#printing 1D Array in reverse
for($i=$length-1;$i>=0;$i--)
{
    echo $students[$i]." ";
}