<?php
include("koneksi.php");

if (!isset($_GET['id'])) {
    header("Location: viewmatakuliah.php");
    exit;
}

$id = $_GET['id'];
$sql = "SELECT * FROM t_matakuliah WHERE kodeMK = '$id'";
$res = mysqli_query($koneksi, $sql);

if (!$res || mysqli_num_rows($res) === 0) {
    header("Location: viewmatakuliah.php");
    exit;
}

$data = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah — AKADEMIKA</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar">
        <div class="brand">AKADEMIKA <span>| Portal Akademik</span></div>
        <ul class="nav-links">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="viewdosen.php">Dosen</a></li>
            <li><a href="viewmahasiswa.php">Mahasiswa</a></li>
            <li><a href="viewmatakuliah.php" class="active">Mata Kuliah</a></li>
        </ul>
    </nav>

    <div class="page-header fade-in">
        <h1>Edit Mata Kuliah</h1>
        <p>Perbarui informasi mata kuliah yang sudah terdaftar</p>
    </div>

    <div class="card form-card fade-in">
        <div class="form-section-title">Formulir Edit Mata Kuliah</div>
        <form action="proses_editmatakuliah.php" method="POST">
            <input type="hidden" name="kodeMK" value="<?php echo $data['kodeMK']; ?>">
            <div class="form-group">
                <label>Kode Mata Kuliah</label>
                <input type="text" value="<?php echo $data['kodeMK']; ?>" disabled
                    style="background:#f1f5f9;color:var(--muted);cursor:not-allowed;">
            </div>
            <div class="form-group">
                <label for="namaMK">Nama Mata Kuliah</label>
                <input type="text" name="namaMK" id="namaMK" value="<?php echo htmlspecialchars($data['namaMK']); ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="sks">Jumlah SKS</label>
                <select name="sks" id="sks" required>
                    <?php for ($i = 1; $i <= 6; $i++): ?>
                        <option value="<?php echo $i; ?>" <?php echo ($data['sks'] == $i) ? 'selected' : ''; ?>>
                            <?php echo $i; ?> SKS
                        </option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="jam">Jam Pertemuan per Minggu</label>
                <input type="number" name="jam" id="jam" value="<?php echo $data['jam']; ?>" min="1" max="12" required>
            </div>
            <div class="form-actions">
                <button type="submit" name="perbarui" class="btn btn-success">Perbarui</button>
                <a href="viewmatakuliah.php" class="btn btn-outline">Batal</a>
            </div>
        </form>
    </div>

    <div class="footer">&copy; <?php echo date('Y'); ?> AKADEMIKA</div>
</body>

</html>