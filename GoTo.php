<?php

// GoTo digunakan untuk skip kodingan 
goto a;
echo "Hello World" . PHP_EOL;

a:
echo "Hello A" . PHP_EOL;


// Contoh lebih complex dengan perulangan
$counter = 1;

while (true){
    echo "Ini adalah while loop ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10){
        goto end;
    }
}

end:
echo "End Loop";