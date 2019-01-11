<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testcase);

for($i =0; $i<$testcase; $i++)
{
    $line = trim(fgets(STDIN));

    $str = strrev($line);

    echo $str."\n";
}