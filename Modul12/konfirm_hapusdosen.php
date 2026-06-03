<?php
include("koneksi.php");

if (!isset($_GET['id']) || !isset($_GET['nama'])) {
    header("Location: viewdosen.php");
    exit;
}

$id = htmlspecialchars($_GET['id']);
$nama = htmlspecialchars($_GET['nama']);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Hapus Dosen — AKADEMIKA</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar">
        <div class="brand">AKADEMIKA <span>| Portal Akademik</span></div>
        <ul class="nav-links">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="viewdosen.php" class="active">Dosen</a></li>
            <li><a href="viewmahasiswa.php">Mahasiswa</a></li>
            <li><a href="viewmatakuliah.php">Mata Kuliah</a></li>
        </ul>
    </nav>

    <div class="page-header fade-in">
        <h1>Konfirmasi Hapus</h1>
        <p>Tindakan ini tidak dapat dibatalkan</p>
    </div>

    <div class="card form-card fade-in" style="max-width:520px;margin:2rem auto;text-align:center;">
        <div style="font-size:3rem;margin-bottom:1rem;">⚠️</div>
        <h2 style="margin-bottom:.5rem;color:#ef4444;">Hapus Data Dosen?</h2>
        <p style="color:var(--muted,#64748b);margin-bottom:1.5rem;">
            Anda yakin ingin menghapus data dosen:<br>
            <strong style="color:var(--text,#0f172a)"><?php echo $nama; ?></strong>
        </p>
        <div class="form-actions" style="justify-content:center;gap:1rem;">
            <a href="hapusdosen.php?id=<?php echo $id; ?>" class="btn btn-danger">Ya, Hapus</a>
            <a href="viewdosen.php" class="btn btn-outline">Batal</a>
        </div>
    </div>

    <div class="footer">&copy; <?php echo date('Y'); ?> AKADEMIKA &mdash; Politeknik Negeri Madiun</div>
</body>

</html>