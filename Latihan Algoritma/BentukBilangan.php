<?php

// *
// **
// ***
// ****
// *****
$star = 5;
for ($i = $star; $i > 0; $i--) {
    for ($j = $star; $j >= $i; $j--) {
        echo "*";
    }
    echo "<br>";
}

// 1
// 12
// 123
// 1234
// 12345
$star = 5;
for ($i = 1; $i <= $star; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}

// 12345
// 1234
// 123
// 12
// 1
$star = 5;
for ($i = $star; $i > 0; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}


$star = 5;
for ($a = $star; $a > 0; $a--) {
    for ($i = 1; $i <= $a; $i++) {
        echo " &nbsp";
    }
    for ($a1 = $star; $a1 >= $a; $a1--) {
        echo "*";
    }
    echo "<br>";
}



$star = 5;
for ($i = $star; $i > 0; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "&nbsp";
    }
    for ($k = $star; $k >= $i; $k--) {
        echo "*";
    }
    echo "<br>";
}



$star = 5;
for ($a = 1; $a <= $star; $a++) {
    for ($b = 1; $b <= $a; $b++) {
        echo "&nbsp";
    }
    for ($c = $star; $c >= $a; $c -= 1) {
        echo "*";
    }
    echo "<br>";
}



$star = 5;
for ($a = 1; $a <= $star; $a++) {
    for ($i = 1; $i <= $a; $i++) {
        echo " &nbsp";
    }
    for ($c = $star; $c >= $a; $c -= 1) {
        echo "*";
    }
    echo "<br>";
}



$star = 5;
for ($a = 1; $a <= $star; $a++) {
    for ($c = $star; $c >= $a; $c -= 1) {
        echo "*";
    }
    echo "<br>";
}



$star = 5;
for ($a = 1; $a <= $star; $a++) {
    for ($b = $star; $b >= $a; $b -= 1) {
        echo "&nbsp";
    }
    for ($c = 1; $c <= $a; $c++) {
        echo "*";
    }
    echo "<br>";
}



for ($a = 1; $a <= $star; $a++) {
    for ($b = 1; $b <= $a; $b++) {
        echo "&nbsp";
    }
    for ($c = $star; $c >= $a; $c -= 1) {
        echo "*";
    }
    echo "<br>";
}
