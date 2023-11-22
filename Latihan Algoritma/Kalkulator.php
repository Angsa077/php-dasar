<?php
// Fungsi untuk mengecek input adalah angka
function is_numeric_or_float($value) {
    return is_numeric($value) || (is_string($value) && is_numeric(str_replace(',', '.', str_replace('.', '', $value))));
}

// Mendapatkan nilai X, Y, dan operasi dari argumen baris perintah
if ($argc != 4) {
    echo "Usage: php calculator.php <nilaiX> <nilaiY> <operasi>\n";
    exit(1);
}

$nilaiX = $argv[1];
$nilaiY = $argv[2];
$operasi = $argv[3];

// Memeriksa apakah nilai X dan Y adalah angka
if (!is_numeric_or_float($nilaiX) || !is_numeric_or_float($nilaiY)) {
    echo "Silakan masukkan nilai yang valid untuk X dan Y.\n";
    exit(1);
}

// Melakukan operasi sesuai pilihan
switch ($operasi) {
    case "A":
        $hasil = $nilaiX + $nilaiY;
        echo "Hasil penjumlahan: $hasil\n";
        break;
    case "B":
        $hasil = $nilaiX * $nilaiY;
        echo "Hasil perkalian: $hasil\n";
        break;
    case "C":
        // Memastikan Y tidak nol untuk menghindari pembagian oleh nol
        if ($nilaiY != 0) {
            $hasil = $nilaiX / $nilaiY;
            echo "Hasil pembagian: $hasil\n";
        } else {
            echo "Error: Pembagian oleh nol tidak diizinkan.\n";
            exit(1);
        }
        break;
    case "D":
        $hasil = pow($nilaiX, $nilaiY);
        echo "Hasil perpangkatan: $hasil\n";
        break;
    default:
        echo "Pilihan operasi tidak valid.\n";
        exit(1);
}


// Contoh memanggilnya php Kalkulator.php 5 3 A