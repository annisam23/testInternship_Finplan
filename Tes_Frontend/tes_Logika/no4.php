<?php

/**
 * Fungsi checkSmallestNumbers adalah fungsi untuk pengecekan bilangan cacah terkecil yang tidak ada dari data yang diinputkan
 * menggunakan perulangan for
 * dan if 
 */
function checkSmallestNumbers($numbers)
{
    sort($numbers);
    for ($i = 0; $i < count($numbers); $i++) {
        $current = $numbers[$i];

        // Jika nilai saat ini + 1 tidak sama dengan nilai selanjutnya, maka kembalikan nilai saat ini + 1
        if ($current + 1 !== $numbers[$i + 1]) {
            return $current + 1;
        }
    }
}

$numbers = [5, 2, 8, 4, 3, 10];
echo checkSmallestNumbers($numbers) . "\n";

$numbers = [2, 3, 4, 6];
echo checkSmallestNumbers($numbers) . "\n";

$numbers = [8, 6, 7, 12];
echo checkSmallestNumbers($numbers) . "\n";
