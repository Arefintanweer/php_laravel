<?php

//1 
$radius = 3.0;
$pi = 3.1415;
$areaOfCircle = $pi * $radius * $radius;
$circumferenceOfCircle = 2* $pi* $radius;
echo "The Area of the circle is {$areaOfCircle}";
echo "<br>";
echo "The Circumference of the circle is {$circumferenceOfCircle}";
echo "<br>";

//2 
$length = 5.0;
$width = 3.0;
$areaOfRectangle = $length * $width;
$perimeterOfRectangle = 2 * ($length + $width);
echo "Area of the Rectangle is {$areaOfRectangle}";
echo "<br>";
echo "Perimeter of the Rectangle is {$perimeterOfRectangle}";
echo "<br>";

//3
for($i=1;$i<=6;$i++){
    for($j=1;$j<=6;$j++){
        echo "@";
    }
    echo "<br>"; 
}

