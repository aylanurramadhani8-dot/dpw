<?php
include("koneksi.php");

if (isset($_POST['perbarui'])) {

    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];

    $sql = "UPDATE t_mahasiswa
                  SET namaMhs = '$namaMhs', prodi = '$prodi', alamat = '$alamat', noHP = '$noHP'
                  WHERE npm = '$npm'";
    $hasil = mysqli_query($koneksi, $sql);

    if (!$hasil) {
        die("Gagal memperbarui data: " . mysqli_error($koneksi));
    }
}

header("Location: viewmahasiswa.php?notif=Data mahasiswa berhasil diperbarui.");
exit;
?>