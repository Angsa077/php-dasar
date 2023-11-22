<?php

// satu function argument
function SayHello($name)
{
    echo "Hello $name" . PHP_EOL;
}
SayHello("Angga");


// Lebih dari satu function argument
function SayHelloFull($name, $lastname)
{
    echo "Hello $name $lastname" . PHP_EOL;
}
SayHelloFull("Angga", "Saputra");

// Declaration function argument
function sum(int $x, int $y)
{
    $total = $x + $y;
    echo "Total $x + $y = $total" . PHP_EOL;
}
sum("100", "100"); // bisa di konversi hasil 200
sum(100, 100); // sesuai aturan hasil 200
sum(true, false);  // karena menggunakan boolean yang bernilai 1 + 0 hasilnya jadi 1

// Variable array function argument
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}
// jika int menjadi array 
sumAll(1, 2, 3, 4, 5);

// jika sudah mempunyai array
$values = [1,2,3,4,5];
sumAll(...$values);

// implode = mengubah array menjadi string