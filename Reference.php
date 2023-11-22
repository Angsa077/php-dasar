<?php

$name = "Angga";
// $otherName = $name;   contoh sebelum reference hasil dipanggil value tetap Angga
$otherName = &$name; //sesudah reference memberikan & sebelum $ itu mengubah value Angga menjadi Saputra
$otherName = "Saputra";

echo $name . PHP_EOL;

// Pass by reference
// function increment(int $value) tanpa mengubah value 1
function increment(int &$value) // memberi reference dan merubah value menjadi 2
{
    $value++;
}

$counter = 1;
increment($counter);

echo $counter .  PHP_EOL;