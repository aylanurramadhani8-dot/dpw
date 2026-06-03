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
    <title>Data Mahasiswa — AKADEMIKA</title>
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
        <h1>Data Mahasiswa</h1>
        <p>Daftar seluruh mahasiswa yang terdaftar di sistem</p>
    </div>

    <div class="card fade-in">
        <div class="actions-bar">
            <form class="search-bar" method="GET" action="viewmahasiswa.php">
                <input type="text" name="cari" placeholder="Cari nama atau prodi..."
                    value="<?php echo htmlspecialchars($keyword); ?>">
                <button type="submit">Cari</button>
                <?php if ($keyword): ?>
                    <a href="viewmahasiswa.php" class="btn btn-outline btn-sm">Reset</a>
                <?php endif; ?>
            </form>
            <a href="inputmahasiswa.php" class="btn btn-primary">+ Tambah Mahasiswa</a>
        </div>

        <?php if (isset($_GET['notif'])): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($_GET['notif']); ?></div>
        <?php endif; ?>

        <table class="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Program Studi</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $stmt = $con->prepare("SELECT * FROM t_mahasiswa WHERE namaMhs LIKE ? OR prodi LIKE ? ORDER BY npm ASC");
                $like = "%$keyword%";
                $stmt->bind_param("ss", $like, $like);
                $stmt->execute();
                $hasil = $stmt->get_result();

                if ($hasil->num_rows > 0) {
                    $no = 1;
                    while ($baris = $hasil->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>$no</td>";
                        echo "<td>{$baris['npm']}</td>";
                        echo "<td>{$baris['namaMhs']}</td>";
                        echo "<td><span class='badge badge-blue'>{$baris['prodi']}</span></td>";
                        echo "<td>{$baris['alamat']}</td>";
                        echo "<td>{$baris['noHP']}</td>";
                        echo '<td class="action-links">
                            <a href="editmahasiswa.php?id=' . $baris['npm'] . '" class="btn btn-warning btn-sm">Edit</a>
                            <a href="konfirm_hapusmahasiswa.php?id=' . $baris['npm'] . '&nama=' . urlencode($baris['namaMhs']) . '" class="btn btn-danger btn-sm">Hapus</a>
                        </td>';
                        echo "</tr>";
                        $no++;
                    }
                } else {
                    $pesan = $keyword ? "Tidak ada data untuk pencarian \"$keyword\"" : "Belum ada data mahasiswa.";
                    echo '<tr><td colspan="7"><div class="empty-state"><div class="icon">—</div><p>' . $pesan . '</p></div></td></tr>';
                }
                $stmt->close();
                ?>
            </tbody>
        </table>
    </div>

    <div class="footer">&copy; <?php echo date('Y'); ?> AKADEMIKA</div>
</body>

</html>