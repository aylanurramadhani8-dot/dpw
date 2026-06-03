<?php
/**
 * Fungsi untuk menghitung gaji bersih
 * @param float $pokok
 * @param float $tunjangan
 * @param float $persenPajak (default 0.10)
 */
function hitungGajiBersih($pokok, $tunjangan, $persenPajak = 0.10) {
    $kotor = $pokok + $tunjangan;
    $pajak = $kotor * $persenPajak;
    $bersih = $kotor - $pajak;

    // Mengembalikan data dalam bentuk array
    return [
        "gajiKotor" => $kotor,
        "pajak"     => $pajak,
        "bersih"    => $bersih
    ];
}

// Data input
$gajiPokok = 3250000;
$tunjanganJabatan = 1200000;

// Menghitung menggunakan fungsi
$hasil = hitungGajiBersih($gajiPokok, $tunjanganJabatan);

echo "<h2>Perhitungan Gaji Obi</h2>";
echo "Gaji Pokok: Rp. " . number_format($gajiPokok, 0, ',', '.') . "<br>";
echo "Tunjangan Jabatan: Rp. " . number_format($tunjanganJabatan, 0, ',', '.') . "<br>";
echo "Gaji Kotor: Rp. " . number_format($hasil['gajiKotor'], 0, ',', '.') . "<br>";
echo "Pajak (10%): Rp. " . number_format($hasil['pajak'], 0, ',', '.') . "<br>";
echo "<strong>Gaji Bersih: Rp. " . number_format($hasil['bersih'], 0, ',', '.') . "</strong><br>";
?>