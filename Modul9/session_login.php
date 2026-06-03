<?php
session_start();

function bersihkan_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$loginMsg = "";

if (isset($_SESSION["username"])) {
    if (isset($_GET["logout"])) {
        session_destroy();
        header("Location: session_login.php");
        exit();
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head><title>Dashboard</title></head>
    <body>
        <h2>Dashboard</h2>
        <p style="color:green;">Selamat datang, <b><?= $_SESSION["username"]; ?></b>!</p>
        <p>Role: <?= $_SESSION["role"]; ?></p>
        <p>Session ID: <?= session_id(); ?></p>
        <a href="session_login.php?logout=1">Logout</a>
    </body>
    </html>
    <?php
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        if (empty($_POST["u"])) throw new Exception("Masukkan username!");
        if (empty($_POST["p"])) throw new Exception("Masukkan password!");

        $username = bersihkan_input($_POST["u"]);
        $password = bersihkan_input($_POST["p"]);
        $role = $_POST["role"] ?? "Mahasiswa";

        if ($username == "admin" && $password == "admin") {
            $_SESSION["username"] = $username;
            $_SESSION["role"] = $role;
            header("Location: session_login.php");
            exit();
        } else {
            throw new Exception("Username atau password salah!");
        }
    } catch (Exception $e) {
        $loginMsg = $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Login dengan Session</title></head>
<body>
<h2>Login dengan Session</h2>
<?php if (!empty($loginMsg)) { echo "<p style='color:red;'>$loginMsg</p>"; } ?>
<form method="post">
    Username: <input type="text" name="u"><br><br>
    Password: <input type="password" name="p"><br><br>
    Role:
    <select name="role">
        <option value="Mahasiswa">Mahasiswa</option>
        <option value="Dosen">Dosen</option>
        <option value="Admin">Admin</option>
    </select><br><br>
    <input type="submit" value="Login">
</form>
<p><small>Username: admin, Password: admin</small></p>
</body>
</html>
