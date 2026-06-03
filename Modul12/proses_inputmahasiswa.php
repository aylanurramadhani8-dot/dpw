<?php
include("koneksi.php");

if (isset($_POST['simpan'])) {

    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];


    $stmt = $con->prepare("INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $npm, $namaMhs, $prodi, $alamat, $noHP);
    $stmt->execute();
    $stmt->close();
}

header("Location: viewmahasiswa.php?notif=Data mahasiswa berhasil ditambahkan.");
exit;
?>