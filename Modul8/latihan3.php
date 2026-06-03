<?php
$a = 8;
$b = 3;

echo "<h3>Operator Aritmatika</h3>";
echo "Penambahan " . ($a + $b) . "<br>";
echo "Pengurangan " . ($a - $b) . "<br>";
echo "Perkalian " . ($a * $b) . "<br>";
echo "Pembagian " . ($a / $b) . "<br>";
echo "Modulus (Sisa bagi) " . ($a % $b) . "<br>";
echo "Exponensial " . ($a ** $b) . "<br><br>";


$a += 5; // $a sekarang 13
$b *= 4; // $b sekarang 12
echo "<h3>Operator Assignment</h3>";
echo "Nilai a (setelah += 5): " . $a . "<br>";
echo "Nilai b (setelah *= 4): " . $b . "<br><br>";

echo "<h3>Operator Increment/Decrement</h3>";
echo "Pre-increment (++a): " . ++$a . "<br>"; // Ditambah dulu, baru ditampilkan
echo "Post-increment (a++): " . $a++ . "<br>"; // Ditampilkan dulu, baru ditambah
echo "Nilai akhir a: " . $a . "<br><br>";

echo "<h3>Operator Perbandingan</h3>";
$x = 200;
$y = "200";

var_dump($x == $y); echo " (Cek nilai)<br>";
var_dump($x === $y); echo " (Cek nilai dan tipe)<br><br>";

echo "<h3>Operator Logika</h3>";
if ($x == 200 && $y === "200") { 
    echo "Kondisi TRUE (AND)<br>"; 
}
if (!($x == 100)) { 
    echo "Kondisi TRUE (NOT - x bukan 100)<br>"; 
}

echo "<h3>Ternary & Null Coalescing</h3>";
$nama = "Budi";
$status = (empty($nama)) ? "User belum login" : "Halo, " . $nama;
echo $status . "<br>";

$warna = $warna ?? "biru telur asin"; // Jika $warna tidak terdefinisi/null, maka pakai "biru"
echo "Warna favorit: " . $warna;

?>