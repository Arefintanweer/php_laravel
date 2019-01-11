<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $T);

for($i =0; $i<$T; $i++)
{
    fscanf(STDIN, "%d\n",$x);
    $y = sqrt($x)*sqrt($x);
    if($x == $y)
    {
        fprintf(STDOUT, "Case %d: YES\n", $T);
    }
    else
    {
        fprintf(STDOUT, "Case %d: NO\n", $T);
    }
}