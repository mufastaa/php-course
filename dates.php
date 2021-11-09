<?php


echo date('Y-m-d H:i:s') . '<br>';




echo date('F j Y, H:i:s') . '<br>';


echo time() . '<br>';

$dateString = '2021-11-09 09:31:3';
$parsedDate = date_parse($dateString); 


$dateString = 'november 9 2021 09:31:3';

$parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);
