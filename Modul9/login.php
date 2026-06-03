<?php
function bersihkan_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$nameErr = $passErr = "";
$name = $pass = $role = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["u"])) {
        $nameErr = "Masukkan username";
    } else {
        $name = bersihkan_input($_POST["u"]);
    }

    if (empty($_POST["p"])) {
        $passErr = "Masukkan password";
    } else {
        $pass = bersihkan_input($_POST["p"]);
    }

    $role = isset($_POST["role"]) ? bersihkan_input($_POST["role"]) : "Mahasiswa";
    $remember = isset($_POST["remember"]) ? true : false;

    if (empty($nameErr) && empty($passErr)) {
        echo "<p style='color:green;'>Login berhasil sebagai <b>$role</b>! Selamat datang, $name</p>";
        if ($remember) {
            echo "<p style='color:blue;'>Akun akan diingat untuk login berikutnya.</p>";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        .error { color: red; font-size: 12px; }
    </style>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Username: <input type="text" name="u">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>

        Password: <input type="password" name="p">
        <span class="error">* <?php echo $passErr; ?></span>
        <br><br>

        Role:
        <select name="role">
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Dosen">Dosen</option>
            <option value="Admin">Admin</option>
        </select>
        <br><br>

        <input type="checkbox" name="remember"> Remember Me<br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
