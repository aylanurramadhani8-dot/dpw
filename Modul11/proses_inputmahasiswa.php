<?php
include("koneksi.php");

if (isset($_POST['simpan'])) {

    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];

    $sql = "INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP)
                  VALUES ('$npm', '$namaMhs', '$prodi', '$alamat', '$noHP')";
    $hasil = mysqli_query($koneksi, $sql);

    if (!$hasil) {
        die("Gagal menyimpan data: " . mysqli_error($koneksi));
    }
}

header("Location: viewmahasiswa.php?notif=Data mahasiswa berhasil ditambahkan.");
exit;
?>