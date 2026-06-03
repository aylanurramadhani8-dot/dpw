<?php
// Data nilai siswa
$siswa = [
    ["no" => 1, "poin" => 75, "nama" => "Adi"],
    ["no" => 2, "poin" => 80, "nama" => "Joni"],
    ["no" => 3, "poin" => 65, "nama" => "Jihan"],
    ["no" => 4, "poin" => 70, "nama" => "Aya"],
    ["no" => 5, "poin" => 85, "nama" => "Ita"],
    ["no" => 6, "poin" => 90, "nama" => "Budi"],
    ["no" => 7, "poin" => 95, "nama" => "Tini"],
    ["no" => 8, "poin" => 65, "nama" => "Sari"]
];

/**
 * Fungsi untuk mencari siswa berdasarkan poin
 */
function cariSiswaBerdasarkanPoin($data, $targetPoin) {
    $hasil = [];
    foreach ($data as $s) {
        if ($s['poin'] == $targetPoin) {
            $hasil[] = $s['nama'];
        }
    }
    return $hasil;
}

echo "<h2>Soal 3: Data Nilai Akhir Kelas</h2>";

// a) Poin siswa nomor urut 5 (Index 4)
echo "<h3>a) Poin siswa nomor urut 5:</h3>";
echo "Nama: " . $siswa[4]['nama'] . ", Poin: " . $siswa[4]['poin'] . "<br>";

// b) & c) Mencari siswa dengan poin tertentu menggunakan fungsi
$targetPoin = [90, 100];

foreach ($targetPoin as $poin) {
    echo "<h3>Siswa dengan poin $poin:</h3>";
    $daftarSiswa = cariSiswaBerdasarkanPoin($siswa, $poin);
    
    if (count($daftarSiswa) > 0) {
        echo "Nama: " . implode(", ", $daftarSiswa) . "<br>";
    } else {
        echo "Tidak ada siswa dengan poin $poin<br>";
    }
}
?>