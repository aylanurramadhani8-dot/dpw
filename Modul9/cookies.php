<?php
// Memanfaatkan cookies untuk menyimpan data identitas

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["simpan"])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $nim = $_POST["nim"];
    $jurusan = $_POST["jurusan"];
    $angkatan = $_POST["angkatan"];

    setcookie("nama", $nama, time() + 86400, "/");
    setcookie("email", $email, time() + 86400, "/");
    setcookie("nim", $nim, time() + 86400, "/");
    setcookie("jurusan", $jurusan, time() + 86400, "/");
    setcookie("angkatan", $angkatan, time() + 86400, "/");

    header("Location: cookies.php");
    exit();
}

if (isset($_GET["hapus"])) {
    foreach (["nama","email","nim","jurusan","angkatan"] as $c) {
        setcookie($c, "", time() - 3600, "/");
    }
    header("Location: cookies.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Cookies - Identitas</title></head>
<body>
<h2>Cookies - Menyimpan Identitas</h2>
<?php if (isset($_COOKIE["nama"])) { ?>
    <h3>Data dari Cookies:</h3>
    <p>Nama: <?= htmlspecialchars($_COOKIE["nama"]) ?></p>
    <p>Email: <?= htmlspecialchars($_COOKIE["email"]) ?></p>
    <p>NIM: <?= htmlspecialchars($_COOKIE["nim"]) ?></p>
    <p>Jurusan: <?= htmlspecialchars($_COOKIE["jurusan"]) ?></p>
    <p>Angkatan: <?= htmlspecialchars($_COOKIE["angkatan"]) ?></p>
    <a href="cookies.php?hapus=1">Hapus Cookies</a>
<?php } else { ?>
    <form method="post">
        Nama: <input type="text" name="nama"><br><br>
        Email: <input type="email" name="email"><br><br>
        NIM: <input type="text" name="nim"><br><br>
        Jurusan: <input type="text" name="jurusan"><br><br>
        Angkatan: <input type="number" name="angkatan"><br><br>
        <input type="submit" name="simpan" value="Simpan ke Cookies">
    </form>
<?php } ?>
</body>
</html>
