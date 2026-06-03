<?php
$target_dir = "gambar/";
$uploadOk = 1;
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["gambar"])) {
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check !== false) {
        $pesan .= "File adalah gambar - " . $check["mime"] . ".<br>";
    } else {
        $pesan .= "File bukan gambar.<br>";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        $pesan .= "Maaf, file sudah ada.<br>";
        $uploadOk = 0;
    }

    if ($_FILES["gambar"]["size"] > 500000) {
        $pesan .= "Maaf, ukuran file terlalu besar.<br>";
        $uploadOk = 0;
    }

    if (!in_array($imageFileType, ["jpg","jpeg","png","gif"])) {
        $pesan .= "Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.<br>";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            $pesan .= "File " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " berhasil diupload.<br>";
            $pesan .= "<img src='$target_file' width='200' alt='Preview Gambar'><br>";
        } else {
            $pesan .= "Maaf, terjadi error saat upload file.<br>";
        }
    } else {
        $pesan .= "File gagal diupload.<br>";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Upload Gambar</title></head>
<body>
<h2>Upload Gambar</h2>
<?php if (!empty($pesan)) echo "<p>$pesan</p>"; ?>
<form method="post" enctype="multipart/form-data">
    Pilih gambar untuk diupload:
    <input type="file" name="gambar"><br><br>
    <input type="submit" value="Upload Gambar">
</form>
</body>
</html>
