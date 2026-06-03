<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa — AKADEMIKA</title>
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
        <h1>Tambah Data Mahasiswa</h1>
        <p>Isi formulir berikut untuk mendaftarkan mahasiswa baru</p>
    </div>

    <div class="card form-card fade-in">
        <div class="form-section-title">Formulir Pendaftaran Mahasiswa</div>
        <form action="proses_inputmahasiswa.php" method="POST">
            <div class="form-group">
                <label for="npm">NIM</label>
                <input type="number" name="npm" id="npm" placeholder="Contoh: 253307025" required>
            </div>
            <div class="form-group">
                <label for="namaMhs">Nama Lengkap</label>
                <input type="text" name="namaMhs" id="namaMhs" placeholder="Masukkan nama lengkap mahasiswa" required>
            </div>
            <div class="form-group">
                <label for="prodi">Program Studi</label>
                <!-- Menggunakan dropdown agar input konsisten -->
                <select name="prodi" id="prodi" required>
                    <option value="" disabled selected>-- Pilih Program Studi --</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Komputer">Teknik Komputer</option>
                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                    <option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Lengkap</label>
                <input type="text" name="alamat" id="alamat"
                    placeholder="Contoh: Jl. Mayjend Panjahitan No.16A, Kota Madiun" required>
            </div>
            <div class="form-group">
                <label for="noHP">Nomor Handphone</label>
                <input type="tel" name="noHP" id="noHP" placeholder="Contoh: 089505187430" required>
            </div>
            <div class="form-actions">
                <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                <a href="viewmahasiswa.php" class="btn btn-outline">Batal</a>
            </div>
        </form>
    </div>

    <div class="footer">&copy; <?php echo date('Y'); ?> AKADEMIKA</div>
</body>

</html>