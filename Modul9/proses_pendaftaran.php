<?php
$file = 'data.json';
$data = [];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: form_pendaftaran.php');
    exit;
}

if (file_exists($file)) {
    $json = file_get_contents($file);
    $data = json_decode($json, true);
    if (!is_array($data)) {
        $data = [];
    }
}

// Gunakan null coalescing operator (?? '') agar tidak error
$entry = [
    'nim'     => $_POST['nim']     ?? '',
    'nama'    => $_POST['nama']    ?? '',
    'email'   => $_POST['email']   ?? '',
    'nohp'    => $_POST['nohp']    ?? '',
    'prodi'   => $_POST['prodi']   ?? '',
    'tempat'  => $_POST['tempat']  ?? '',
    'ttl'     => $_POST['ttl']     ?? '',
    'alamat'  => $_POST['alamat']  ?? '',
    'gender'  => $_POST['gender']  ?? ''
];

$data[] = $entry;
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Proses Pendaftaran</title>
</head>
<body>
    <h2>Data berhasil disimpan</h2>
    Selamat datang <b><?= htmlspecialchars($entry['nama']); ?></b><br>
    NIM : <?= htmlspecialchars($entry['nim']); ?><br>
    Email : <?= htmlspecialchars($entry['email']); ?><br>
    No HP : <?= htmlspecialchars($entry['nohp']); ?><br>
    Program Studi : <?= htmlspecialchars($entry['prodi']); ?><br>
    Tempat, tanggal Lahir : <?= htmlspecialchars($entry['tempat']); ?>, <?= htmlspecialchars($entry['ttl']); ?><br>
    Alamat : <?= nl2br(htmlspecialchars($entry['alamat'])); ?><br>
    Jenis Kelamin : <?= htmlspecialchars($entry['gender']); ?><br>
    <p><a href="json_data.php">Lihat semua data pendaftaran</a></p>
    <p><a href="form_pendaftaran.php">Kembali ke form</a></p>
</body>
</html>
