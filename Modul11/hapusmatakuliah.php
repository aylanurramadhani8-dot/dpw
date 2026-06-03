<?php
include("koneksi.php");

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM t_matakuliah WHERE kodeMK = '$id'";
    $res = mysqli_query($koneksi, $sql);

    if (!$res) {
        die("Gagal menghapus data: " . mysqli_error($koneksi));
    }
}

header("Location: viewmatakuliah.php?notif=Data mata kuliah berhasil dihapus.");
exit;
?>