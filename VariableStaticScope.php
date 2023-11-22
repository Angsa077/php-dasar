<?php

function increment()
{
    static $counter = 1; // static scope
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}

increment();
increment();
increment();


// hasilnya akan menjadi 1 2 3 tapi jika static nya dihapus akan menjadi 1 1 1 tidak berubah