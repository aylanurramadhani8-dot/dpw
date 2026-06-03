<?php
include("koneksi.php");

$totalDosen = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(*) as total FROM t_dosen"))['total'];
$totalMhs = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(*) as total FROM t_mahasiswa"))['total'];
$totalMK = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(*) as total FROM t_matakuliah"))['total'];

$recentDosen = mysqli_query($koneksi, "SELECT idDosen, namaDosen FROM t_dosen ORDER BY idDosen DESC LIMIT 5");
$recentMhs = mysqli_query($koneksi, "SELECT npm, namaMhs, prodi FROM t_mahasiswa ORDER BY npm DESC LIMIT 5");
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKADEMIKA — Portal Akademik</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar">
        <div class="brand">AKADEMIKA <span>| Portal Akademik</span></div>
        <ul class="nav-links">
            <li><a href="index.php" class="active">Beranda</a></li>
            <li><a href="viewdosen.php">Dosen</a></li>
            <li><a href="viewmahasiswa.php">Mahasiswa</a></li>
            <li><a href="viewmatakuliah.php">Mata Kuliah</a></li>
        </ul>
    </nav>

    <!-- Welcome Banner -->
    <div class="welcome-banner fade-in">
        <div class="welcome-content">
            <h1><span>AKADEMIKA</span> NEXUS</h1>
            <p>System online. Kelola data dosen, mahasiswa, dan mata kuliah dari satu panel terpadu.</p>
        </div>
    </div>

    <!-- Statistik -->
    <div class="stats-grid fade-in">
        <a href="viewdosen.php" class="stat-card dosen">
            <div class="stat-header">
                <div class="stat-icon-box dosen-icon">
                    <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                        <circle cx="12" cy="7" r="4" />
                    </svg>
                </div>
                <div class="stat-info">
                    <div class="stat-label">Total Dosen</div>
                    <div class="stat-value"><?php echo $totalDosen; ?></div>
                </div>
            </div>
            <div class="stat-footer">Lihat selengkapnya &rarr;</div>
        </a>
        <a href="viewmahasiswa.php" class="stat-card mahasiswa">
            <div class="stat-header">
                <div class="stat-icon-box mahasiswa-icon">
                    <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M23 21v-2a4 4 0 00-3-3.87" />
                        <path d="M16 3.13a4 4 0 010 7.75" />
                    </svg>
                </div>
                <div class="stat-info">
                    <div class="stat-label">Total Mahasiswa</div>
                    <div class="stat-value"><?php echo $totalMhs; ?></div>
                </div>
            </div>
            <div class="stat-footer">Lihat selengkapnya &rarr;</div>
        </a>
        <a href="viewmatakuliah.php" class="stat-card matakuliah">
            <div class="stat-header">
                <div class="stat-icon-box matakuliah-icon">
                    <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M4 19.5A2.5 2.5 0 016.5 17H20" />
                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z" />
                    </svg>
                </div>
                <div class="stat-info">
                    <div class="stat-label">Total Mata Kuliah</div>
                    <div class="stat-value"><?php echo $totalMK; ?></div>
                </div>
            </div>
            <div class="stat-footer">Lihat selengkapnya &rarr;</div>
        </a>
    </div>

    <!-- Akses Cepat -->
    <div class="section-container fade-in">
        <div class="section-title">Akses Cepat</div>
        <div class="quick-links">
            <a href="inputdosen.php" class="quick-link-card">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                    <circle cx="8.5" cy="7" r="4" />
                    <line x1="20" y1="8" x2="20" y2="14" />
                    <line x1="23" y1="11" x2="17" y2="11" />
                </svg>
                <span>Tambah Dosen</span>
            </a>
            <a href="inputmahasiswa.php" class="quick-link-card">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                    <circle cx="8.5" cy="7" r="4" />
                    <line x1="20" y1="8" x2="20" y2="14" />
                    <line x1="23" y1="11" x2="17" y2="11" />
                </svg>
                <span>Tambah Mahasiswa</span>
            </a>
            <a href="inputmatakuliah.php" class="quick-link-card">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <line x1="12" y1="5" x2="12" y2="19" />
                    <line x1="5" y1="12" x2="19" y2="12" />
                </svg>
                <span>Tambah Mata Kuliah</span>
            </a>
        </div>
    </div>

    <!-- Data Terbaru -->
    <div class="recent-grid fade-in">
        <div class="recent-card">
            <div class="recent-header">
                <h3>Dosen Terbaru</h3>
                <a href="viewdosen.php" class="view-all">Lihat Semua</a>
            </div>
            <table class="data-table compact">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Dosen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($recentDosen) > 0) {
                        while ($row = mysqli_fetch_assoc($recentDosen)) {
                            echo "<tr>";
                            echo "<td>{$row['idDosen']}</td>";
                            echo "<td>{$row['namaDosen']}</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo '<tr><td colspan="2" style="text-align:center;color:var(--muted);padding:1.5rem;">Belum ada data</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="recent-card">
            <div class="recent-header">
                <h3>Mahasiswa Terbaru</h3>
                <a href="viewmahasiswa.php" class="view-all">Lihat Semua</a>
            </div>
            <table class="data-table compact">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($recentMhs) > 0) {
                        while ($row = mysqli_fetch_assoc($recentMhs)) {
                            echo "<tr>";
                            echo "<td>{$row['npm']}</td>";
                            echo "<td>{$row['namaMhs']}</td>";
                            echo "<td><span class='badge badge-blue'>{$row['prodi']}</span></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo '<tr><td colspan="3" style="text-align:center;color:var(--muted);padding:1.5rem;">Belum ada data</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="footer">&copy; <?php echo date('Y'); ?> AKADEMIKA &mdash; Politeknik Negeri Madiun</div>

</body>

</html>