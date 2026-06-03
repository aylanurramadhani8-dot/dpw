<?php
include("koneksi.php");

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM t_mahasiswa WHERE npm = '$id'";
    $res = mysqli_query($koneksi, $sql);

    if (!$res) {
        die("Gagal menghapus data: " . mysqli_error($koneksi));
    }
}

header("Location: viewmahasiswa.php?notif=Data mahasiswa berhasil dihapus.");
exit;
?>