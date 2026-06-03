<?php
include("koneksi.php");

// Tangkap kata kunci pencarian jika ada
$keyword = "";
if (isset($_GET['cari']) && trim($_GET['cari']) !== "") {
    $keyword = trim($_GET['cari']);
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Kuliah — AKADEMIKA</title>
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
        <h1>Data Mata Kuliah</h1>
        <p>Daftar seluruh mata kuliah yang tersedia di sistem</p>
    </div>

    <div class="card fade-in">
        <div class="actions-bar">
            <form class="search-bar" method="GET" action="viewmatakuliah.php">
                <input type="text" name="cari" placeholder="Cari nama mata kuliah..."
                    value="<?php echo htmlspecialchars($keyword); ?>">
                <button type="submit">Cari</button>
                <?php if ($keyword): ?>
                    <a href="viewmatakuliah.php" class="btn btn-outline btn-sm">Reset</a>
                <?php endif; ?>
            </form>
            <a href="inputmatakuliah.php" class="btn btn-primary">+ Tambah Mata Kuliah</a>
        </div>

        <?php if (isset($_GET['notif'])): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($_GET['notif']); ?></div>
        <?php endif; ?>

        <table class="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode MK</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Jam/Minggu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $stmt = $con->prepare("SELECT * FROM t_matakuliah WHERE namaMK LIKE ? ORDER BY kodeMK ASC");
                $like = "%$keyword%";
                $stmt->bind_param("s", $like);
                $stmt->execute();
                $hasil = $stmt->get_result();

                if ($hasil->num_rows > 0) {
                    $no = 1;
                    while ($baris = $hasil->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>$no</td>";
                        echo "<td>{$baris['kodeMK']}</td>";
                        echo "<td>{$baris['namaMK']}</td>";
                        echo "<td><span class='badge badge-green'>{$baris['sks']} SKS</span></td>";
                        echo "<td>{$baris['jam']} jam</td>";
                        echo '<td class="action-links">
                            <a href="editmatakuliah.php?id=' . $baris['kodeMK'] . '" class="btn btn-warning btn-sm">Edit</a>
                            <a href="konfirm_hapusmatakuliah.php?id=' . $baris['kodeMK'] . '&nama=' . urlencode($baris['namaMK']) . '" class="btn btn-danger btn-sm">Hapus</a>
                        </td>';
                        echo "</tr>";
                        $no++;
                    }
                } else {
                    $pesan = $keyword ? "Tidak ada data untuk pencarian \"$keyword\"" : "Belum ada data mata kuliah.";
                    echo '<tr><td colspan="6"><div class="empty-state"><div class="icon">—</div><p>' . $pesan . '</p></div></td></tr>';
                }
                $stmt->close();
                ?>
            </tbody>
        </table>
    </div>

    <div class="footer">&copy; <?php echo date('Y'); ?> AKADEMIKA</div>
</body>

</html>