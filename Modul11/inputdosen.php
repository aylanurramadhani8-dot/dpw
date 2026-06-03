<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dosen — AKADEMIKA</title>
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
        <h1>Tambah Data Dosen</h1>
        <p>Isi formulir berikut untuk mendaftarkan dosen baru</p>
    </div>

    <div class="card form-card fade-in">
        <div class="form-section-title">Formulir Pendaftaran Dosen</div>
        <form action="proses_inputdosen.php" method="POST">
            <div class="form-group">
                <label for="namaDosen">Nama Lengkap Dosen</label>
                <input type="text" name="namaDosen" id="namaDosen" placeholder="Contoh: Dr. Farid, M.Kom" required>
            </div>
            <div class="form-group">
                <label for="noHP">Nomor Handphone</label>
                <input type="tel" name="noHP" id="noHP" placeholder="Contoh: 089505187430" required>
            </div>
            <div class="form-actions">
                <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                <a href="viewdosen.php" class="btn btn-outline">Batal</a>
            </div>
        </form>
    </div>

    <div class="footer">&copy; <?php echo date('Y'); ?> AKADEMIKA</div>
</body>

</html>