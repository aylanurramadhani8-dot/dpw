<?php
function bersihkan_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$name = $email = $comment = $topic = $rating = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = bersihkan_input($_POST["name"]);
    $email = bersihkan_input($_POST["email"]);
    $comment = bersihkan_input($_POST["comment"]);
    $topic = bersihkan_input($_POST["topic"]);
    $rating = bersihkan_input($_POST["rating"]);

    echo "Nama : $name <br>";
    echo "Email : $email <br>";
    echo "Topik : $topic <br>";
    echo "Komentar : $comment <br>";
    echo "Rating : $rating / 5 <br>";
    echo "<hr>";
}
?>
<!DOCTYPE html>
<html>
<head><title>Form Komentar</title></head>
<body>
<h2>Form Komentar</h2>
<form method="post">
    Nama: <input type="text" name="name"><br><br>
    E-mail: <input type="text" name="email"><br><br>
    Topik: <input type="text" name="topic"><br><br>
    Rating (1-5): <input type="number" name="rating" min="1" max="5"><br><br>
    Komentar: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
    <input type="submit" value="Simpan">
    <input type="reset" value="Bersihkan">
</form>
</body>
</html>
