<?php

// Bilangan 1-10
for($i = 1; $i<=10; $i++){
    echo "Angka Ke-$i". PHP_EOL;
}

// Bilangan Ganjil 1-10 
for($i = 1; $i<=10; $i++){
    if($i % 2 == 1){
        echo "Angka Ganjil Ke-$i". PHP_EOL;
    }
}

// Bilangan Genap 1-10
for($i = 1; $i<=10; $i++){
    if($i % 2 == 0){
        echo "Angka Genap Ke-$i". PHP_EOL;
    }
}

// Bilangan Prima 1-50
for($i = 1; $i<=50; $i++){
    $count = 0;
    for($j = 1; $j<=$i; $j++){
        if($i % $j == 0){
            $count++;
        }
    }
    if($count == 2){
        echo "Angka Prima Ke-$i". PHP_EOL;
    }
}