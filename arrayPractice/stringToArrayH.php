<?php 
#string to array = explode()
#array to string = join()
#if multiple delimeter needed = preg_split('/ /');
$names = "rahim ,karim ,rafi";

$a = explode(' ,',$names); #converted string to array,delimiter = ( ,)

print_r($a);

$array = ["rahim","karim"];

$s = join(',',$array);#converted array to string ,glue = (,)

echo $s;

$string = 'rahim-karim, topu-apu';

$arr = preg_split('/(, |-)/',$string); #converted string to array by multiple delimiter

print_r($arr);
