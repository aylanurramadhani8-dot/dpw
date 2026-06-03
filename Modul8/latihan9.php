<?php
// 1. Fungsi dengan parameter default
// Jika $nama tidak diisi, maka otomatis bernilai "Tamu"
function sapaPengguna($nama = "Tamu") {
    echo "Selamat datang, " . $nama . "!<br>";
}

sapaPengguna("Chilla"); // Output: Selamat datang, Chilla!
sapaPengguna();        // Output: Selamat datang, Tamu!

// 2. Fungsi dengan nilai balik (Return)
// Menambahkan return type hint agar hasil fungsi pasti berupa angka (int)
function hitungLuasPersegi(int $sisi): int {
    return $sisi * $sisi;
}

$sisi = 6;
$luas = hitungLuasPersegi($sisi);

echo "Luas persegi dengan sisi $sisi adalah: " . $luas . "<br>";

// 3. Contoh fungsi untuk format mata uang (Studi kasus nyata)
function formatRupiah(float $angka): string {
    return "Rp " . number_format($angka, 0, ',', '.');
}

echo "Total harga: " . formatRupiah(1500000);
?>