<?php
// Latihan 4: Menampilkan 7 nama hari dengan mekanisme array dan looping

$daftarHari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];

echo "<h2>7 Nama Hari</h2>";

// Menggunakan perulangan untuk menampilkan data secara dinamis
foreach ($daftarHari as $index => $namaHari) {
    // $index + 1 digunakan agar urutan dimulai dari 1 bukan 0
    echo "Hari ke-" . ($index + 1) . ": " . $namaHari . "<br>";
}
?>