<?php
include("koneksi.php");

if (isset($_GET['id'])) {

    $id = $_GET['id'];


    $stmt = $con->prepare("DELETE FROM t_mahasiswa WHERE npm=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

header("Location: viewmahasiswa.php?notif=Data mahasiswa berhasil dihapus.");
exit;
?>