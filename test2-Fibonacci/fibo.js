function generateFibonacci(n) {
    let fibonacci = [];

    // Menambahkan dua nilai awal dalam deret Fibonacci
    fibonacci[0] = 0;
    fibonacci[1] = 1;

    // Menghitung deret Fibonacci hingga n angka
    for (let i = 2; i < n; i++) {
        fibonacci[i] = fibonacci[i - 1] + fibonacci[i - 2];
    }

    return fibonacci;
}

// Memanggil fungsi untuk menghasilkan 25 angka pertama
let fibonacciNumbers = generateFibonacci(25);

// Menampilkan hasil
console.log(fibonacciNumbers.join(", "));

// Penjelasan Kode:
// Fungsi generateFibonacci(n):

// Fungsi ini menerima parameter n yang menentukan berapa banyak angka Fibonacci yang ingin dihasilkan.
// Inisialisasi array: Dua elemen pertama dalam deret Fibonacci adalah 0 dan 1, sehingga diinisialisasi di posisi fibonacci[0] dan fibonacci[1].
// Pengulangan (Loop): for loop dimulai dari indeks 2, untuk menghitung angka Fibonacci berikutnya berdasarkan penjumlahan dari dua angka sebelumnya (fibonacci[i - 1] + fibonacci[i - 2]).
// Setelah loop selesai, fungsi mengembalikan array berisi deret Fibonacci.
// Menampilkan hasil:

// console.log(fibonacciNumbers.join(", ")); digunakan untuk menampilkan deret Fibonacci dalam format string yang dipisahkan oleh koma.