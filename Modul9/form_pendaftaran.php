<!DOCTYPE html>
<html>
<head><title>Form Pendaftaran</title></head>
<body>
<h2>Form Pendaftaran Mahasiswa</h2>
<form method="POST" action="proses_pendaftaran.php">
    NIM: <input type="text" name="nim"><br><br>
    Nama: <input type="text" name="nama"><br><br>
    Email: <input type="email" name="email"><br><br>
    No HP: <input type="text" name="nohp"><br><br>
    Program Studi:
    <select name="prodi">
        <option value="TI">Teknik Informatika</option>
        <option value="SI">Sistem Informasi</option>
        <option value="RPL">Rekayasa Perangkat Lunak</option>
    </select><br><br>
    Tempat Lahir: <input type="text" name="tempat"><br><br>
    Tanggal Lahir: <input type="date" name="ttl"><br><br>
    Alamat: <textarea name="alamat"></textarea><br><br>
    Jenis Kelamin:
    <input type="radio" name="gender" value="Laki-Laki"> Laki-Laki
    <input type="radio" name="gender" value="Perempuan"> Perempuan<br><br>
    <input type="submit" name="kirim" value="Kirim">
</form>
</body>
</html>
