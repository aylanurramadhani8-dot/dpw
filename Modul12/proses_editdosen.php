<?php
include("koneksi.php");

if (isset($_POST['perbarui'])) {

    $idDosen = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    $stmt = $con->prepare("UPDATE t_dosen SET namaDosen=?, noHP=? WHERE idDosen=?");
    $stmt->bind_param("ssi", $namaDosen, $noHP, $idDosen);
    $stmt->execute();
    $stmt->close();
}

header("Location: viewdosen.php?notif=Data dosen berhasil diperbarui.");
exit;
?>