<?php


$a = 5;
$b = 4;
$c = 1.2;


echo ($a + $b) * $c . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>'; 
echo $a / $b . '<br>';
echo $a % $b . '<br>';


echo $a++ . '<br>';
echo ++$a . '<br>';


echo $a-- . '<br>';
echo --$a . '<br>';


is_float(1.25);
is_integer(3.4);
is_numeric("3.45"); 
is_numeric("3g.45"); 


$strNumber = '12.34';
$number = (float)$strNumber; 
var_dump($number);
echo '<br>';


echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>';


$number = 123456789.12345;
echo number_format($number, 2, '.', ',') . '<br>';

