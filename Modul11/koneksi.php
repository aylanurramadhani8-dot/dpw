<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "akademik";
$port = 3306;

$koneksi = mysqli_connect($host, $user, $pass, $db, $port);
$link = $koneksi;

if (!$koneksi) {
  die("Koneksi dengan database gagal: " . mysqli_connect_error());
}
?>