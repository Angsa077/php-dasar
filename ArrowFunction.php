<?php

// mirip anonymous function cuman lebih modern digunakan minimal versi php diatas 7 dan hanya sederhana

$firstName = "Angga";
$lastName = "Saputra";

$anonymousFunction = function () use ($firstName, $lastName) : string {
    return "Hello $firstName $lastName" . PHP_EOL;
};

$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $anonymousFunction();
echo $arrowFunction();