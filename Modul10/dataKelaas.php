<?php
require_once('kelas/Mahasiswa.php');

$mhs1 = new Mahasiswa("Ayla Nur R", "253307006", "Teknik Informatika", "2A");
$mhs2 = new Mahasiswa("Arinda", "253307007", "Sistem Informasi", "2B");
$mhs3 = new Mahasiswa("Ayu Dhia", "253307008", "Rekayasa Perangkat Lunak", "2C");

$daftar = [$mhs1, $mhs2, $mhs3];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Kelas</title>
    <style>
        body { font-family: Poppins, Arial, sans-serif; background: #f0f0f0; }
        .card { width: 300px; margin: 15px; padding: 15px;
                border: 2px solid darkblue; border-radius: 8px; background: #fff;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1); float: left; }
        h3 { color: darkblue; text-align: center; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Data Kelas Mahasiswa</h2>
    <?php foreach ($daftar as $mhs): ?>
        <div class="card">
            <h3><?= $mhs->getNama(); ?></h3>
            <?= $mhs->tampilkanInfo(); ?>
        </div>
    <?php endforeach; ?>
</body>
</html>
