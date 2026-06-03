<?php
// 1. Pola Segitiga Bintang (Nested Loop)
echo "<h2>Pola Segitiga Bintang</h2>";
$tinggi = 7; // Disederhanakan agar lebih proporsional
for ($i = 1; $i <= $tinggi; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* "; // Ditambah spasi agar lebih rapi
    }
    echo "<br>";
}

echo "<br>";

// 2. For dengan Break & Continue
echo "<h2>For dengan Break dan Continue</h2>";
for ($x = 1; $x <= 10; $x++) {
    // Break: menghentikan perulangan sepenuhnya
    if ($x == 8) {
        break; 
    }
    
    // Continue: melewati perulangan saat ini dan lanjut ke angka berikutnya
    if ($x == 4) {
        continue;
    }
    
    echo "Nomor : $x <br>";
}
?>