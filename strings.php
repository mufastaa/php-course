<?php

$string = "Hello, I am mufastaa"; 
$string2 = 'Hello, I am mufastaa'; 
echo $string . '<br>';
echo $string2 . '<br>';


echo "Hello " . " World"; 

$string = "    Hello World      ";


$invoiceNumber = 100;
$invoiceNumber2 = 123456;
echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_repeat('Hello', 2) . '<br>' . PHP_EOL;



$longText = "
  Hello, my name is mufastaa
  I am 25,
  I love my mom
";
echo $longText . '<br>' . PHP_EOL;
echo nl2br($longText) . '<br>' . PHP_EOL;


$longText = "
  Hello, my name is mufastaa
  I am 25,
  I love my mom
";
echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>'. PHP_EOL;
echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;
echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;



