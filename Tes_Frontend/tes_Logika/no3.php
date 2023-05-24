<?php

/**
 * Penjelasan No. 3
 * function checkpassword adalah fungsi yang untuk ketentuan membuat password pada umumnya
 * 1. Kata sandi harus memiliki panjang antara 8 dan 32 karakter
 * 2. Kata sandi Tidak boleh dimulai dengan angka
 * 3. Tetapi kata sandi harus mengandung angka
 * 4. Kata sandi harus mengandung huruf kapital 
 * 
 * fungsi strlen() = digunakan untuk mengembalikan panjang (jumlah karakter) dari sebuah string
 * fungsi preg_match() =  untuk melakukan pencocokan pola (pattern matching) menggunakan ekspresi reguler.
 * 
 */
function checkPassword($password)
{
    if (strlen($password) < 8 || strlen($password) > 32) {
        return "Kata sandi harus memiliki panjang antara 8 dan 32 karakter";
    }

    if (preg_match('/^[0-9]/', $password)) {
        return "Karakter awal tidak boleh angka";
    }

    if (!preg_match('/[0-9]/', $password)) {
        return "Kata sandi harus mengandung angka";
    }

    if (!preg_match('/[a-z]/', $password) || !preg_match('/[A-Z]/', $password)) {
        return "Kata sandi harus mengandung huruf kapital dan huruf kecil";
    }

    return "Kata sandi valid";
}

$input = "Sandiwar4";
$output = checkPassword($input);

echo $input . '<br>';
echo $output;
