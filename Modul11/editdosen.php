<?php
include("koneksi.php");

// Ambil ID dari URL, jika tidak ada redirect ke daftar
if (!isset($_GET['id'])) {
    header("Location: viewdosen.php");
    exit;
}

$id = $_GET['id'];
$sql = "SELECT * FROM t_dosen WHERE idDosen = '$id'";
$res = mysqli_query($koneksi, $sql);

if (!$res || mysqli_num_rows($res) === 0) {
    header("Location: viewdosen.php");
    exit;
}

$data = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen — AKADEMIKA</title>
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
        <h1>Edit Data Dosen</h1>
        <p>Perbarui informasi dosen yang sudah terdaftar</p>
    </div>

    <div class="card form-card fade-in">
        <div class="form-section-title">Formulir Edit Dosen</div>
        <form action="proses_editdosen.php" method="POST">
            <!-- Kirim ID lewat hidden field -->
            <input type="hidden" name="idDosen" value="<?php echo $data['idDosen']; ?>">
            <div class="form-group">
                <label for="namaDosen">Nama Lengkap Dosen</label>
                <input type="text" name="namaDosen" id="namaDosen"
                    value="<?php echo htmlspecialchars($data['namaDosen']); ?>" required>
            </div>
            <div class="form-group">
                <label for="noHP">Nomor Handphone</label>
                <input type="tel" name="noHP" id="noHP" value="<?php echo htmlspecialchars($data['noHP']); ?>" required>
            </div>
            <div class="form-actions">
                <button type="submit" name="perbarui" class="btn btn-success">Perbarui</button>
                <a href="viewdosen.php" class="btn btn-outline">Batal</a>
            </div>
        </form>
    </div>

    <div class="footer">&copy; <?php echo date('Y'); ?> AKADEMIKA</div>
</body>

</html>