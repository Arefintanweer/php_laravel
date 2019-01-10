<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

#input 1D array

/*$array = array();

for($i=0;$i<5;$i++)
{
    fscanf(STDIN, "%d", $array[$i]);
}
for($i=0;$i<5;$i++)
{
    fprintf(STDOUT,"%d ",$array[$i]);
}*/

#Input 2D array

$array = array(array());

for($i=0;$i<4;$i++)
{
    for($j=0;$j<4;$j++)
    {
        fscanf(STDIN,"%d",$array[$i][$j]);
    }
}
for($i=0;$i<4;$i++)
{
    for($j=0;$j<4;$j++)
    {
        fprintf(STDOUT,"%d ",$array[$i][$j]);
    }
    echo "\n";
}

