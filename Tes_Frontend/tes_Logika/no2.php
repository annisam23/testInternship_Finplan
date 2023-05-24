<?php

/**
 * Penjelasan No 2
 * Function search untuk menghitung berapa kali kata 'sang gajah', 'serigala', 'harimau' disebut
 * didalam fungsi ini menggunakan function yang ada di php seperti
 * 
 * substr_count() = untuk menghitung berapa kali sebuah substring muncul dalam sebuah string
 * dan didalam function ini memiliki 2 parameter : 
 * parameter pertama = untuk string utama di mana pencarian akan dilakukan.
 * parameter kedua = untuk substring yang akan dihitung kemunculannya dalam string utama.
 * 
 * Berikut contoh implementasinya:
 * $count = substr_count(strtolower($n), strtolower($word));
 */
function search($n)
{
    $searchWords = ['sang gajah', 'serigala', 'harimau'];
    $output = '';

    foreach ($searchWords as $word) {
        $count = substr_count(strtolower($n), strtolower($word));

        for ($i = 0; $i < $count; $i++) {
            $output .= $word . ' - ';
        }
    }

    // untuk menghapus tanda '-' ekstra di akhir
    $output = rtrim($output, ' - ');

    return $output;
}

$input = "Berikut adalah kisah sang gajah. Sang gajah memiliki teman serigala bernama DoeSang. Gajah sering dibela oleh serigala ketika harimau mendekati gajah.";
$output = search($input);

echo $input . '<br>';
echo $output;
