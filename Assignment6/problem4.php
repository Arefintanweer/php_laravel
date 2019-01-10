<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%s\n", $word); 

$reverse = strrev($word);

if($word == $reverse)
{
    echo "Yes";
}
else
{
    echo "No";
}