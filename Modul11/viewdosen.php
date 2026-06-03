<?php
include("koneksi.php");

// Tangkap kata kunci pencarian jika ada
$keyword = "";
$filterQuery = "";
if (isset($_GET['cari']) && trim($_GET['cari']) !== "") {
    $keyword = mysqli_real_escape_string($koneksi, trim($_GET['cari']));
    $filterQuery = " WHERE namaDosen LIKE '%$keyword%'";
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen — AKADEMIKA</title>
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
        <h1>Data Dosen</h1>
        <p>Daftar seluruh dosen yang terdaftar di sistem</p>
    </div>

    <div class="card fade-in">
        <div class="actions-bar">
            <form class="search-bar" method="GET" action="viewdosen.php">
                <input type="text" name="cari" placeholder="Cari nama dosen..."
                    value="<?php echo htmlspecialchars($keyword); ?>">
                <button type="submit">Cari</button>
                <?php if ($keyword): ?>
                    <a href="viewdosen.php" class="btn btn-outline btn-sm">Reset</a>
                <?php endif; ?>
            </form>
            <a href="inputdosen.php" class="btn btn-primary">+ Tambah Dosen</a>
        </div>

        <?php if (isset($_GET['notif'])): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($_GET['notif']); ?></div>
        <?php endif; ?>

        <table class="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Dosen</th>
                    <th>Nama Dosen</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM t_dosen" . $filterQuery . " ORDER BY idDosen ASC";
                $hasil = mysqli_query($koneksi, $sql);

                if (!$hasil) {
                    die("Gagal mengambil data: " . mysqli_error($koneksi));
                }

                if (mysqli_num_rows($hasil) > 0) {
                    $no = 1;
                    while ($baris = mysqli_fetch_assoc($hasil)) {
                        echo "<tr>";
                        echo "<td>$no</td>";
                        echo "<td>{$baris['idDosen']}</td>";
                        echo "<td>{$baris['namaDosen']}</td>";
                        echo "<td>{$baris['noHP']}</td>";
                        echo '<td class="action-links">
                            <a href="editdosen.php?id=' . $baris['idDosen'] . '" class="btn btn-warning btn-sm">Edit</a>
                            <a href="konfirm_hapusdosen.php?id=' . $baris['idDosen'] . '&nama=' . urlencode($baris['namaDosen']) . '" class="btn btn-danger btn-sm">Hapus</a>
                        </td>';
                        echo "</tr>";
                        $no++;
                    }
                } else {
                    $pesan = $keyword ? "Tidak ada data untuk pencarian \"$keyword\"" : "Belum ada data dosen.";
                    echo '<tr><td colspan="5"><div class="empty-state"><div class="icon">—</div><p>' . $pesan . '</p></div></td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="footer">&copy; <?php echo date('Y'); ?> AKADEMIKA</div>
</body>

</html>