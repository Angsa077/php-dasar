<?php

$name = "Angga";
$name = NULL;

echo "Name : ";
echo $name;
echo "\n";

// Mengecek apakah data null disarankan menggunakan isset dari pada is_null
echo "Is Name Null? : ";
echo is_null($name);
echo "\n";
var_dump(is_null($name));

// Menghapus Variable
$contoh = "Angga";
unset($contoh);

var_dump(isset($contoh));

