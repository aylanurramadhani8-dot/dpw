<?php
include("koneksi.php");

if (!isset($_GET['id'])) {
    header("Location: viewmahasiswa.php");
    exit;
}

$id = $_GET['id'];


$stmt = $con->prepare("SELECT * FROM t_mahasiswa WHERE npm = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$res = $stmt->get_result();

if (!$res || $res->num_rows === 0) {
    header("Location: viewmahasiswa.php");
    exit;
}

$data = $res->fetch_assoc();
$stmt->close();

// Daftar program studi
$daftarProdi = [
    "Teknik Informatika",
    "Sistem Informasi",
    "Teknik Komputer",
    "Manajemen Informatika",
    "Komputerisasi Akuntansi"
];
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa — AKADEMIKA</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar">
        <div class="brand">AKADEMIKA <span>| Portal Akademik</span></div>
        <ul class="nav-links">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="viewdosen.php">Dosen</a></li>
            <li><a href="viewmahasiswa.php" class="active">Mahasiswa</a></li>
            <li><a href="viewmatakuliah.php">Mata Kuliah</a></li>
        </ul>
    </nav>

    <div class="page-header fade-in">
        <h1>Edit Data Mahasiswa</h1>
        <p>Perbarui informasi mahasiswa yang sudah terdaftar</p>
    </div>

    <div class="card form-card fade-in">
        <div class="form-section-title">Formulir Edit Mahasiswa</div>
        <form action="proses_editmahasiswa.php" method="POST">
            <input type="hidden" name="npm" value="<?php echo $data['npm']; ?>">
            <div class="form-group">
                <label>NPM</label>
                <!-- NPM tidak bisa diubah karena Primary Key -->
                <input type="text" value="<?php echo $data['npm']; ?>" disabled
                    style="background:#f1f5f9;color:var(--muted);cursor:not-allowed;">
            </div>
            <div class="form-group">
                <label for="namaMhs">Nama Lengkap</label>
                <input type="text" name="namaMhs" id="namaMhs" value="<?php echo htmlspecialchars($data['namaMhs']); ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="prodi">Program Studi</label>
                <select name="prodi" id="prodi" required>
                    <?php foreach ($daftarProdi as $p): ?>
                        <option value="<?php echo $p; ?>" <?php echo ($data['prodi'] === $p) ? 'selected' : ''; ?>>
                            <?php echo $p; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Lengkap</label>
                <input type="text" name="alamat" id="alamat" value="<?php echo htmlspecialchars($data['alamat']); ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="noHP">Nomor Handphone</label>
                <input type="tel" name="noHP" id="noHP" value="<?php echo htmlspecialchars($data['noHP']); ?>" required>
            </div>
            <div class="form-actions">
                <button type="submit" name="perbarui" class="btn btn-success">Perbarui</button>
                <a href="viewmahasiswa.php" class="btn btn-outline">Batal</a>
            </div>
        </form>
    </div>

    <div class="footer">&copy; <?php echo date('Y'); ?> AKADEMIKA</div>
</body>

</html>