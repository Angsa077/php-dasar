<?php

// tanpa nama function
$sayHello = function(string $name){
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Angga");
$sayHello("Saputra");

// anonymous function sebagai argument contoh 1 
function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Angga", function(string $name): string {
    return strtoupper($name);
});

// anonymous function sebagai argument contoh 2
$filterFunction = function(string $name): string {
    return strtoupper($name);
};
sayGoodBye("Saputra", $filterFunction);

// anonymous function mengakses variable luar
$firstName = "Angga";
$lastName = "Saputra";

$sayHelloAngga = function () use ($firstName, $lastName){
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloAngga();