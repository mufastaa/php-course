<?php


$fruits = ["Banana", "Apple", "Orange"];


echo $fruits[1].'<br>';

$fruits[0] = "Banana";



echo count($fruits).'<br>';

$fruits[] = 'Peach';
echo $fruits[3].'<br>';
array_push($fruits, 'Foo');
array_pop($fruits);



array_unshift($fruits, 'Apple');
array_shift($fruits);



$string = "Banana,Apple,Orange,Peach";


print_r($fruits);

echo implode(",", $fruits).'<br>';


$vegetables = ['Potato', 'Cucumber'];



sort($fruits); 




$person = [
    'name' => 'bandana',
    'surname' => 'mufastaa',
    'age' => 25,
    'hobbies' => ['football', 'Video Games'],
];

echo $person['name'].'<br>';


$person['channel'] = 'mufastaa';


if (!isset($person['address'])){
    $person['address'] = 'Unknown';
}

echo $person['address'].'<br>';





ksort($person); 
