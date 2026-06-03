<?php
require_once('kelas/Mahasiswa.php');
require_once('kelas/akunBank.php');
require_once('kelas/Manusia.php');

$mhs = new Mahasiswa("Nama Anda", "123456789", "Teknik Informatika", "2A");

$data1 = new akunBank("001", 10000);
$data1->setNama("Nasabah Pertama");
$data1->tambahUang(5000);
$data1->kurangiUang(2000);

$data2 = new akunBank("002", 50000);
$data2->setNama("Nasabah Kedua");
$data2->kurangiUang(60000);

$andi = new Manusia();
$andi->setNama("Andi Pratama");
$andi->setUmur(20);

$budi = new Manusia();
$budi->setNama("Budi Santoso");
$budi->setUmur(22);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index Modul 10</title>
    <style>
        body { font-family: Poppins, Arial, sans-serif; background: #f9f9f9; }
        .card { width: 400px; margin: 20px auto; padding: 20px;
                border: 2px solid #ccc; border-radius: 8px; background: #fff;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h3 { text-align: center; }
        .blue { border-color: darkblue; }
        .green { border-color: darkgreen; }
        .red { border-color: darkred; }
    </style>
</head>
<body>
    <div class="card blue"><h3>Data Mahasiswa</h3><?= $mhs->tampilkanInfo(); ?></div>
    <div class="card green"><h3>Data Akun 1</h3><?= $data1->tampilkanInfo(); ?></div>
    <div class="card green"><h3>Data Akun 2</h3><?= $data2->tampilkanInfo(); ?></div>
    <div class="card red"><h3>Identitas Budi</h3><?= $budi->tampilkanIdentitas(); ?></div>
    <div class="card red"><h3>Identitas Anda</h3><?= $andi->tampilkanIdentitas(); ?></div>
</body>
</html>
