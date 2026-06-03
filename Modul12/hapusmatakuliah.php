<?php
include("koneksi.php");

if (isset($_GET['id'])) {

    $id = $_GET['id'];


    $stmt = $con->prepare("DELETE FROM t_matakuliah WHERE kodeMK=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

header("Location: viewmatakuliah.php?notif=Data mata kuliah berhasil dihapus.");
exit;
?>