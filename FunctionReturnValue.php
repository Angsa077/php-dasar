<?php

function sum(int $x, int $y)
{
    $total = $x + $y;
    return $total;
}
$result = sum(10, 10);
var_dump($result);

// jika ingin membuat hasilnya dengan sebuah declaration maka buat menjadi seperti ini 
// function getFinalValue(int $value):string atau
// function getFinalValue(int $value):int
function getFinalValue(int $value)
{
    if ($value >= 90){
        return "A";
    } elseif ($value >= 80){
        return "B";
    } elseif ($value >= 70){
        return "C";
    } elseif ($value >= 60){
        return "D";
    } else{
        return "E";
    }

    echo "Ups" . PHP_EOL;
}

$score =getFinalValue(80);
var_dump($score);