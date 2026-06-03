<?php
// latihanPerulangan2.php
// Menampilkan nilai array apakah ganjil atau genap

$angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

echo "<h2>Analisis Ganjil atau Genap</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Angka</th><th>Kategori</th></tr>";

foreach ($angka as $nilai) {
    $kategori = ($nilai % 2 == 0) ? "Genap" : "Ganjil";
    
    echo "<tr>";
    echo "<td>$nilai</td>";
    echo "<td>$kategori</td>";
    echo "</tr>";
}
echo "</table>";
?>