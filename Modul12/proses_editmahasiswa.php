<?php
include("koneksi.php");

if (isset($_POST['perbarui'])) {

    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];


    $stmt = $con->prepare("UPDATE t_mahasiswa SET namaMhs=?, prodi=?, alamat=?, noHP=? WHERE npm=?");
    $stmt->bind_param("ssssi", $namaMhs, $prodi, $alamat, $noHP, $npm);
    $stmt->execute();
    $stmt->close();
}

header("Location: viewmahasiswa.php?notif=Data mahasiswa berhasil diperbarui.");
exit;
?>