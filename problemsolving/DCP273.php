<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testcase); 

for($i =0; $i<$testcase; $i++)
{
    $line = trim(fgets(STDIN));
    $flag=0;
    for($j=0;$j<strlen($line);$j++)
    {
        if($line[$j]=='r')
        {
           $flag=1;
        }
        else
        {
            $flag=0;
        }
    }
    if($flag=1)
    {
        echo "Not vely easy\n";
    }
    else
    {
        echo "vely easy\n";
    }
}
