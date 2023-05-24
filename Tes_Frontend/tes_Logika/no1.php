<?php

/**
 * Penjelasan No 1
 * Fungsi displayMultiple(n) menerima satu parameter integer n.
 * Fungsi melakukan loop dari 1 sampai n, dan untuk setiap bilangan:
 * - Jika bilangan tersebut kelipatan 3 dan 7, maka tampilkan huruf Z.
 * - Jika bilangan tersebut hanya kelipatan 3, maka tampilkan bilangan tersebut.
 * - Jika bilangan tersebut hanya kelipatan 7, maka tampilkan bilangan tersebut.
 * Fungsi tidak mengembalikan nilai apapun, tetapi langsung menampilkan output ke console menggunakan perintah echo.
 */

function displayMultiple($n)
{
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 == 0 && $i % 7 == 0) {
            echo "Z, ";
        } elseif ($i % 3 == 0) {
            echo $i . ", ";
        } elseif ($i % 7 == 0) {
            echo $i . ", ";
        }
    }
}

$n = 30;
displayMultiple($n);
