<?php
function pattern($n)
{
    if ($n % 2 === 0) {
        return 'Harus bilangan ganjil';
    }

    $patternString = '';

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($n >= 5) {
                if ($i >= 2 && $i !== $n) {
                    if ($j >= 2 && $j < $n) {
                        if ($j === $n - ($i - 1)) {
                            $patternString .= 'X';
                        } else {
                            $patternString .= 'O';
                        }
                    } else {
                        $patternString .= 'X';
                    }
                } else {
                    $patternString .= 'X';
                }
            } else {
                $patternString .= 'X';
            }
        }
        $patternString .= "\n";
    }

    return $patternString;
}


echo pattern(3) . "\n";
//Hilangkan komentar untuk menjalankan
//echo pattern(5) . "\n";
//echo pattern(7) . "\n";
//echo pattern(2) . "\n";
