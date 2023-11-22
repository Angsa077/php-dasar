<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    // atau bisa seperti ini $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Angga", "strtoupper");
sayHello("Angga", "strtolower");

// atau bisa begini dengan anonymous function
sayHello("Angga", function(string $name): string {
    return strtoupper($name);
});

// atau bisa menggunakan arrow function
sayHello("Angga", fn($name) =>strtoupper($name));