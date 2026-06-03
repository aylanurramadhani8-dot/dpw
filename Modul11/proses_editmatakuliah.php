<?php
include("koneksi.php");

if (isset($_POST['perbarui'])) {

    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];

    $sql = "UPDATE t_matakuliah
                  SET namaMK = '$namaMK', sks = '$sks', jam = '$jam'
                  WHERE kodeMK = '$kodeMK'";
    $hasil = mysqli_query($koneksi, $sql);

    if (!$hasil) {
        die("Gagal memperbarui data: " . mysqli_error($koneksi));
    }
}

header("Location: viewmatakuliah.php?notif=Data mata kuliah berhasil diperbarui.");
exit;
?>