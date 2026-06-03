<?php

$nilai = 75;

echo "<h2>Konversi Nilai</h2>";
echo "Nilai angka: $nilai<br>";
echo "Nilai huruf: ";

if ($nilai >= 90 && $nilai <= 100) {
    echo "A";
} elseif ($nilai >= 80 && $nilai <= 89) {
    echo "AB";
} elseif ($nilai >= 70 && $nilai <= 79) {
    echo "B";
} elseif ($nilai >= 60 && $nilai <= 69) {
    echo "BC";
} else {
    echo "C";
}

echo "<br>";

/* Aturan Konversi:
   C   = 0   -> 59
   BC  = 60  -> 69
   B   = 70  -> 79
   AB  = 80  -> 89
   A   = 90  -> 100
*/
?>