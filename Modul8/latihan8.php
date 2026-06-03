<?php

$dataKelas = [
    "1C" => ["udin", "ismail", "adi"],
    "1D" => ["lukman", "fajri", "mahmud"]
];

echo "<h3>Daftar Siswa per Kelas:</h3>";

foreach ($dataKelas as $namaKelas => $daftarSiswa) {
    echo "<b>Kelas $namaKelas:</b><br>";
    foreach ($daftarSiswa as $siswa) {
        echo "- $siswa<br>";
    }
    echo "<br>";
}

echo "--- Akses Spesifik ---<br>";
echo "Fajri ada di kelas: 1D (index 1)<br>";
echo "Adi ada di kelas: 1C (index 2)<br>";
?>