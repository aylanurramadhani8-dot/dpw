<?php
include("koneksi.php");

// Proses hapus hanya jika ID tersedia di URL
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM t_dosen WHERE idDosen = '$id'";
    $res = mysqli_query($koneksi, $sql);

    if (!$res) {
        die("Gagal menghapus data: " . mysqli_error($koneksi));
    }
}

// Kembali ke halaman daftar dosen
header("Location: viewdosen.php?notif=Data dosen berhasil dihapus.");
exit;
?>