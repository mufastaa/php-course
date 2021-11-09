<?php

$age = 20;
$salary = 300000;


if ($age == 20) {
    echo "1";
}


if ($age === 20)
    echo "1";


if ($age > 20) {
    echo "1";
} else {
    echo "2";
}


$age == 20; 
$age == '20'; 

$age === 20; 
$age === '20'; 


if ($age > 20 && $salary === 300000) {

}

if ($age > 20 OR $salary === 300000) {

}


echo $age < 22 ? 'Young' : 'Old';
echo '<br>';

$myAge = $age ?: 18;


$var = isset($name) ? $name : 'mufastaa';
$var = $name ?? 'mufastaa'; 
echo $var.'<br>';


$userRole = 'admin'; 

switch ($userRole) {
    case 'admin':
        echo 'You can do anything<br>';
        break;
    case 'editor';
        echo 'You can edit content<br>';
        break;
    case 'user':
        echo 'You can view posts and comment<br>';
        break;
    default:
        echo 'Unknown role<br>';
}
