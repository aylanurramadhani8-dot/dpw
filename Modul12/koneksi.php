<?php
$koneksi = mysqli_connect("localhost", "root", "", "akademik");

if (!$koneksi) {
    die("Koneksi dengan database gagal: " . mysqli_connect_error());
}

$con = $koneksi;
?>