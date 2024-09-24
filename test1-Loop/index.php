<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n";
    } elseif ($i % 3 == 0) {
        echo "Fizz\n";
    } elseif ($i % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo $i . "\n";
    }
}
?>

<!-- 
Penjelasan kode:

Menggunakan for loop untuk mencetak angka dari 1 hingga 100.
Untuk setiap angka, diperiksa apakah habis dibagi 3 dan 5 (kelipatan 3 dan 5) dan mencetak "FizzBuzz".
Jika hanya kelipatan 3, mencetak "Fizz".
Jika hanya kelipatan 5, mencetak "Buzz".
Jika bukan kelipatan 3 atau 5, mencetak angkanya langsung. 
-->