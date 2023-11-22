<?php

// Penggunaan Switch Statement digunakan jika variable yang dipilih hanya ada 1
$nilai = "A";

switch ($nilai){
    case "A" : 
        echo "Anda lulus dengan baik" . PHP_EOL;
        break;
    case "B" :
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
}