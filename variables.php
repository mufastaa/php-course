<?php


$name = "mufastaa";
$age = 26;
$isMale = true; 
$height = 1.85;
$salary = 150000;

echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

var_dump($name, $age, $isMale, $height, $salary);

$name = false;

echo gettype($name) . '<br>';

is_string($name); 
is_int($age); 
is_bool($isMale); 
is_double($height); 

