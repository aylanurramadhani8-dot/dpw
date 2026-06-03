<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah — AKADEMIKA</title>
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
        <h1>Tambah Mata Kuliah</h1>
        <p>Isi formulir berikut untuk menambahkan mata kuliah baru</p>
    </div>

    <div class="card form-card fade-in">
        <div class="form-section-title">Formulir Pendaftaran Mata Kuliah</div>
        <form action="proses_inputmatakuliah.php" method="POST">
            <div class="form-group">
                <label for="kodeMK">Kode Mata Kuliah</label>
                <input type="number" name="kodeMK" id="kodeMK" placeholder="Contoh: 101" required>
            </div>
            <div class="form-group">
                <label for="namaMK">Nama Mata Kuliah</label>
                <input type="text" name="namaMK" id="namaMK" placeholder="Contoh: Pemrograman Web" required>
            </div>
            <div class="form-group">
                <label for="sks">Jumlah SKS</label>
                <!-- Dropdown SKS agar tidak salah input -->
                <select name="sks" id="sks" required>
                    <option value="" disabled selected>-- Pilih jumlah SKS --</option>
                    <option value="1">1 SKS</option>
                    <option value="2">2 SKS</option>
                    <option value="3">3 SKS</option>
                    <option value="4">4 SKS</option>
                    <option value="5">5 SKS</option>
                    <option value="6">6 SKS</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jam">Jam Pertemuan per Minggu</label>
                <input type="number" name="jam" id="jam" placeholder="Contoh: 4" min="1" max="12" required>
            </div>
            <div class="form-actions">
                <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                <a href="viewmatakuliah.php" class="btn btn-outline">Batal</a>
            </div>
        </form>
    </div>

    <div class="footer">&copy; <?php echo date('Y'); ?> AKADEMIKA</div>
</body>

</html>