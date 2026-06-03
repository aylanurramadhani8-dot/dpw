<?php
include("koneksi.php");

if (isset($_POST['perbarui'])) {

    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];


    $stmt = $con->prepare("UPDATE t_matakuliah SET namaMK=?, sks=?, jam=? WHERE kodeMK=?");
    $stmt->bind_param("siii", $namaMK, $sks, $jam, $kodeMK);
    $stmt->execute();
    $stmt->close();
}

header("Location: viewmatakuliah.php?notif=Data mata kuliah berhasil diperbarui.");
exit;
?>