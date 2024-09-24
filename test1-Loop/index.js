for (let i = 1; i <= 100; i++) {
    if (i % 3 === 0 && i % 5 === 0) {
        console.log("FizzBuzz");
    } else if (i % 3 === 0) {
        console.log("Fizz");
    } else if (i % 5 === 0) {
        console.log("Buzz");
    } else {
        console.log(i);
    }
}

// Penjelasan kode:

// Menggunakan for loop untuk iterasi dari 1 hingga 100.
// Menggunakan operator modulus (%) untuk memeriksa apakah angka tersebut kelipatan 3, 5, atau keduanya.
// Cetak "FizzBuzz" jika angka merupakan kelipatan 3 dan 5.
// Cetak "Fizz" jika hanya kelipatan 3, dan "Buzz" jika hanya kelipatan 5.
// Jika tidak, angka tersebut dicetak.