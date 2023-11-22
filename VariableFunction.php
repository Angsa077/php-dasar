<?php

function first()
{
    echo "First" . PHP_EOL;
}

function second()
{
    echo "Second" . PHP_EOL;
}

$functionYangAkanDipanggil = "first";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "second";
$functionYangAkanDipanggil();


function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Angga", "strtoupper");
sayHello("Angga", "strtolower");