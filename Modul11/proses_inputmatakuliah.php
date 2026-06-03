<?php
include("koneksi.php");

if (isset($_POST['simpan'])) {

    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];

    $sql = "INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam)
                  VALUES ('$kodeMK', '$namaMK', '$sks', '$jam')";
    $hasil = mysqli_query($koneksi, $sql);

    if (!$hasil) {
        die("Gagal menyimpan data: " . mysqli_error($koneksi));
    }
}

header("Location: viewmatakuliah.php?notif=Data mata kuliah berhasil ditambahkan.");
exit;
?>