<?php
include("koneksi.php");


if (isset($_POST['simpan'])) {


    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];


    $stmt = $con->prepare("INSERT INTO t_dosen (namaDosen, noHP) VALUES (?, ?)");
    $stmt->bind_param("ss", $namaDosen, $noHP);
    $stmt->execute();
    $stmt->close();
}

header("Location: viewdosen.php?notif=Data dosen berhasil ditambahkan.");
exit;
?>