<?php
$sapaan = "Halo semuanya!";
$institusi = "Politeknik Negeri Madiun";
$angka_a = 15;
$angka_b = 20.5;

echo "<p>Pesan: $sapaan</p>";
echo "<p>Nilai A: $angka_a</p>";
echo "<p>Nilai B: $angka_b</p>";
echo "Sedang belajar pemrograman di " . $institusi . "<br>";

$hasil = $angka_a + $angka_b;
echo "Hasil penjumlahan: " . $hasil;

define("JURUSAN", "Teknologi Informasi");
echo "<br>Program studi: " . JURUSAN;
?>