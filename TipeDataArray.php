<?php

$values = array(1, 2, 3, 4, 4.5);
var_dump($values);
echo "\n";

$names = ["Angga", "Elsa"];
var_dump($names);
echo "\n";

// Mengakses data array dari index
var_dump($names[0]);
echo "\n";

// Mengubah data array
$names[1] = "Saputra";
var_dump($names);
echo "\n";

// Menambah data array
$names[] = "Elsa";
var_dump($names);
echo "\n";

// Menghapus data array
unset($names[2]);
var_dump($names);
echo "\n";

// Menghitung panjang array
var_dump(count($names));
echo "\n";

// Membuat map array
$angga = array(
    "id" => 1,
    "name" => "Angga Saputra",
    "Age" => 22,
    "address" => array(
        "city" => "Bandung",
        "country" => "Indonesia"
    )
);

$elsa = [
    "id" => 2,
    "name" => "Elsa Fadilah",
    "Age" => 22,
    "address" => [
        "city" => "Serang",
        "country" => "Indonesia"
    ]
];

// Mengakses data map array
var_dump($angga["name"]);
var_dump($angga["address"]["city"]);
echo "\n";
var_dump($elsa["name"]);
echo "\n";