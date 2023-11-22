<?php

$name = "Angga Saputra";

echo "Name : ";
echo $name;
echo "\n";

// atau bisa lebih mudah

echo "name : " . $name . PHP_EOL;
echo "value : " . 100 . PHP_EOL;

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

$city = "Srg";
echo $city[0] . PHP_EOL;
echo $city[1] . PHP_EOL;
echo $city[2] . PHP_EOL;

// Curly Barce
$var = "Angga";
echo "This is {$var}s". PHP_EOL;