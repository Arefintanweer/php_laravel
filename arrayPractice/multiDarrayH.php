<?php 
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

//$a = array();
$a = array(array());
for($row = 0; $row < 3; $row++)
{   
    //$a[$row] = array();
    for($col = 0;$col< 3;$col++)
    {
        fscanf(STDIN, "%d",$a[$row][$col]);
    }
}
for($row = 0; $row < 3; $row++)
{
    for($col = 0;$col< 3;$col++)
    {
        fprintf(STDOUT, "%d ",$a[$row][$col]);
    }
    echo "\n";
}  
