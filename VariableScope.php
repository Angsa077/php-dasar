<?php

// Contoh Global Scope gabisa dipanggil dalam function
$nameFirst = "Angga";

function sayHello(){
    global $nameFirst; // haruss ditambah global keyword untuk bisa mengakses global scope

    echo $nameFirst . PHP_EOL; // error

    // atau menggunakan global variable echo $GLOBALS["nameFirst"] . PHP_EOL;
}
sayHello();



// Contoh Local Scope 
function createName()
{
    $nameSecond = "Saputra"; // Local Scope
}

createName();
echo $nameSecond . PHP_EOL;