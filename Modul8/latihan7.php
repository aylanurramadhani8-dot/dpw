<?php
echo "<h3>Daftar Buah & Umur</h3>";
$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");

echo "Saya suka buah " . $namaBuah[0] . ", " . $namaBuah[1] . ", dan " . $namaBuah[2] . ".<br>";

$umur = array("Andi" => "35 Tahun", "Ben" => "37 Tahun", "Joe" => "43 Tahun");
$umur['Ahmad'] = "50 Tahun";

foreach ($umur as $nama => $usia) {
    echo "Umur $nama adalah $usia<br>";
}

echo "<h3>Stok Kendaraan</h3>";
$gudangMobil = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

/* * Tips: Gunakan perulangan untuk menampilkan array multidimensi 
 * agar kode tidak berulang (lebih efisien).
 */
for ($row = 0; $row < count($gudangMobil); $row++) {
    echo "<p><b>" . $gudangMobil[$row][0] . "</b><br>";
    echo "Stok: " . $gudangMobil[$row][1] . ", Terjual: " . $gudangMobil[$row][2] . ".</p>";
}
?>