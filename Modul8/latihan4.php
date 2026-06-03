<?php
/* Operator perbandingan:
 * == (sama dengan), === (identik), != (tidak sama), 
 * <, >, <=, >=, <=> (spaceship operator)
 */

$jam = date("H"); // Mengambil jam saat ini (format 00-23)

// 1. Kondisi IF tunggal
echo "<h3>1. Kondisi IF</h3>";
if ($jam < 12) {
    echo "Sekarang masih pagi, tetap semangat!";
} else {
    echo "Sekarang sudah lewat dari pagi.";
}

// 2. If dan Else
echo "<h3>2. If dan Else</h3>";
if ($jam < 18) {
    echo "Selamat beraktivitas!";
} else {
    echo "Waktunya istirahat, sudah malam.";
}

// 3. Nested If (If bertingkat/multi-kondisi)
echo "<h3>3. Nested If (Multi-kondisi)</h3>";
if ($jam < 10) {
    echo "Selamat Pagi!";
} elseif ($jam < 15) {
    echo "Selamat Siang!";
} elseif ($jam < 19) {
    echo "Selamat Sore!";
} else {
    echo "Selamat Malam!";
}

echo "<br><br>Waktu server saat ini: " . $jam . ":00";
?>