<?php
// Soal cerita 2: Menentukan banyaknya masing-masing uang pecahan

$jumlah = 1387500;
echo "<h2>Pecahan Uang Ani</h2>";
echo "Total uang: Rp. " . number_format($jumlah, 0, ',', '.') . "<br><br>";

$pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 1000, 500);
$sisa = $jumlah;

foreach ($pecahan as $nominal) {
    $lembar = intdiv($sisa, $nominal);
    
    // Hanya tampilkan jika jumlah lembar > 0
    if ($lembar > 0) {
        echo "Rp. " . number_format($nominal, 0, ',', '.') . " : $lembar lembar<br>";
        $sisa = $sisa % $nominal;
    }
}

// Menampilkan sisa akhir jika ada
if ($sisa > 0) {
    echo "Sisa kecil: Rp. " . number_format($sisa, 0, ',', '.') . "<br>";
}
?>