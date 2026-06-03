<?php
// Sambungkan ke database
include("koneksi.php");

// Jalankan proses hanya jika tombol simpan diklik
if (isset($_POST['simpan'])) {

    // Ambil data dari form
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    // Susun dan jalankan query INSERT
    $sql = "INSERT INTO t_dosen (namaDosen, noHP) VALUES ('$namaDosen', '$noHP')";
    $hasil = mysqli_query($koneksi, $sql);

    // Cek apakah query berhasil
    if (!$hasil) {
        die("Gagal menyimpan data: " . mysqli_error($koneksi));
    }
}

// Kembali ke halaman daftar dosen dengan notifikasi
header("Location: viewdosen.php?notif=Data dosen berhasil ditambahkan.");
exit;
?>