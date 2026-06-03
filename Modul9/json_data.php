<?php
$file = 'data.json';
$data = [];

if (file_exists($file)) {
    $data = json_decode(file_get_contents($file), true) ?: [];
}
$jsonPretty = json_encode($data, JSON_PRETTY_PRINT);
?>
<!DOCTYPE html>
<html>
<head><title>Data Pendaftaran</title></head>
<body>
<h2>Data Pendaftaran Mahasiswa</h2>
<?php if (count($data) === 0): ?>
    <p>Belum ada data tersimpan.</p>
<?php endif; ?>
<p>Total data tersimpan: <?= count($data) ?> mahasiswa</p>
<h3>Data dalam format Array:</h3>
<pre><?php print_r($data); ?></pre>
<h3>Data dalam format JSON:</h3>
<pre><?= htmlspecialchars($jsonPretty) ?></pre>
<p><a href="form_pendaftaran.php">Tambah data baru</a></p>
</body>
</html>
