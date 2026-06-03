<?php
include("koneksi.php");

if (isset($_POST['simpan'])) {

    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];


    $stmt = $con->prepare("INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isii", $kodeMK, $namaMK, $sks, $jam);
    $stmt->execute();
    $stmt->close();
}

header("Location: viewmatakuliah.php?notif=Data mata kuliah berhasil ditambahkan.");
exit;
?>