<?php
include("koneksi.php");

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $stmt = $con->prepare("DELETE FROM t_dosen WHERE idDosen=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}
header("Location: viewdosen.php?notif=Data dosen berhasil dihapus.");
exit;
?>