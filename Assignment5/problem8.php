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