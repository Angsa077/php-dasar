<?php

require "Lib/MyFunction.php";
// jika file tidak ada atau salah maka program akan berhenti dan terjadi error

// include "Lib/MyFunction.php";
// jika file tidak ada atau salah maka hanya akan memberi peringatan, namun program tetap berjalan

// untuk lebih aman sebenarnya bisa menggunakan require_once dan include_once

echo sayHello("Angga", "Saputra");
