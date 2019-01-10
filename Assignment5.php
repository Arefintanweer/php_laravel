<?php
//1

$age ="23, 44, 70, 25, 90, 17";

$parts=explode(",",$age);

$sum = 0;

$length = sizeof($parts);

for($i=0;$i<$length;$i++){

    $sum = $sum +(int)trim($parts[$i]);
}

$average = $sum/$length;

echo round($average,2);

echo "<br/>";

//2
$number = 100;

for($i=2;$i<$number;$i++)
{   
    $divisor=0;
    for($j=1;$j<=$i;$j++)
    {
        if($i%$j==0)
        {
            $divisor++;
        }
    }

    if($divisor==2)
    {
        echo $i."<br/>";
    }
}
echo "<br/>";

//3
$str = 'i love bangladesh, i love tiger,i am learning php';
$words = array_count_values(str_word_count($str, 1));
print_r ($words);

echo "<br/>";

//4
$factorial = 1;

for($i=1;$i<=12;$i++)
{
    $factorial = $factorial * $i; 
}

echo $factorial;

echo "<br/>";
//5

function distanceOfCircle($x1,$y1,$x2,$y2)
{
    $d= ($x1 - $x2)*($x1 - $x2) + ($y1 - $y2)*($y1 - $y2);
    return sqrt($d);
}

$distance = distanceOfCircle(3,4,14,18); //17

$r1 = 5;
$r2 = 8;

if($distance < ($r1 +$r2)) //13
{
    echo "Yes";
}
else
{
    echo "No";
}

//7

<?php

$str1 = '12345678912345678912345678912345678912345678912345';
$n1 = str_split($str1, 1);
$str2 = '12345678912345678912345678912345678912345678912345';
$n2 = str_split($str2, 1);

$l = count($n1);

$sum = 0;
$carry = 0;
$c=array();

for($i=$l-1;$i>=0;$i--)
{
  $sum = $n1[$i]+$n2[$i]+$carry;
  if($sum>=10)
  {
    $carry = 1;
    $c[$i]=$sum-10;
  }
  else
  {
    $carry = 0;
    $c[$i]=$sum;
  }
}

for($i=0;$i<$l;$i++)
{
  echo $c[$i];    
}

/*
#12345678912345678912345678912345678912345678912345
#12345678912345678912345678912345678912345678912345
#__________________________________________________
#24691357824691357824691357824691357824691357824690
*/



//8

<?php
//$str1 = "12345678912345678912345678912345678912345678912345";
//$str2 = "12345678912345678912345678912345678912345678912345";

$str1 = "20202020202020202020202020202020202020202020202020";
$str2 = "10101010101010101010101010101010101010101010101010";

$n1 = str_split($str1,1);
$n2 = str_split($str2,1);

//print_r($n2);
$sub = array();
$l = count($n1);

for($i=$l-1;$i>=0;$i--)
{
    if($n1[$i]<$n2[$i])
    {
        $n1[$i]=$n[$i]+10;
        $sub[$i] =$n1[i]-$n2[$i];
    }
    else
    {
        $sub[$i]= $n1[$i]-$n2[$i];
    }
}
for($i=0;$i<$l;$i++)
{
    echo $sub[$i];
}





