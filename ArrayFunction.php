<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// semua data di kali dengan nilai 10
$dataResult = array_map(fn(int $value) => $value * 10, $data);
var_dump($dataResult);

// rsort atau reverse sort untuk membalikan posisi nilai
rsort($data);
var_dump($data);

// contoh mengambil data key dan values
var_dump(array_keys($data));
var_dump(array_values($data));

$person = [
    "firstName" => "Angga",
    "lastName" => "Saputra"
];
var_dump(array_keys($person));
var_dump(array_values($person));