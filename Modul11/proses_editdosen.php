<?php
include("koneksi.php");

if (isset($_POST['perbarui'])) {

    $idDosen = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    // Query UPDATE untuk memperbarui data dosen
    $sql = "UPDATE t_dosen SET namaDosen = '$namaDosen', noHP = '$noHP'
                  WHERE idDosen = '$idDosen'";
    $hasil = mysqli_query($koneksi, $sql);

    if (!$hasil) {
        die("Gagal memperbarui data: " . mysqli_error($koneksi));
    }
}

header("Location: viewdosen.php?notif=Data dosen berhasil diperbarui.");
exit;
?>