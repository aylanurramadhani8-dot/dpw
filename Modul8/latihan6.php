<?php

echo "<h3>While Loop</h3>";
$x = 1;
while ($x <= 5) {
    echo "Nomor : $x <br>";
    $x++;
}

echo "<h3>Do While Loop</h3>";
$y = 6;
do {
    echo "Nomor : $y <br>";
    $y++;
} while ($y <= 5); // Meskipun kondisi false, kode di dalam do tetap dijalankan minimal sekali

echo "<h3>Foreach Loop</h3>";
$buah = array("Apel", "Jeruk", "Mangga", "Anggur");
foreach ($buah as $item) {
    echo "Buah: $item <br>";
}

echo "<h3>For Loop (Bilangan Genap)</h3>";
for ($i = 2; $i <= 10; $i += 2) {
    echo "Angka Genap: $i <br>";
}
?>