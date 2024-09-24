<?php
function generateFibonacci($n) {
    $fibonacci = [];

    // Menambahkan dua nilai awal dalam deret Fibonacci
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    // Menghitung deret Fibonacci hingga n angka
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

// Memanggil fungsi untuk menghasilkan 25 angka pertama
$fibonacciNumbers = generateFibonacci(25);

// Menampilkan hasil
echo implode(", ", $fibonacciNumbers);
?>

<!-- 
Penjelasan Kode:
Fungsi generateFibonacci($n):

Fungsi ini menerima parameter $n yang menentukan berapa banyak angka Fibonacci yang ingin dihasilkan.
Inisialisasi array: Kita mulai dengan menambahkan dua angka pertama dalam deret Fibonacci: 0 dan 1.
Pengulangan (Loop): Menggunakan for loop untuk menghitung elemen Fibonacci berikutnya. Setiap elemen adalah hasil penjumlahan dari dua elemen sebelumnya ($fibonacci[$i - 1] + $fibonacci[$i - 2]).
Setelah selesai, fungsi mengembalikan array berisi deret Fibonacci.

Menampilkan hasil:

Fungsi implode(", ", $fibonacciNumbers) digunakan untuk menggabungkan elemen array Fibonacci menjadi string yang dipisahkan oleh koma, lalu ditampilkan dengan echo. 
-->