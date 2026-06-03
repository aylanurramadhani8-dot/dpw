<?php

$warna = "biru";


echo "Warna yang dipilih: <b>" . ucfirst($warna) . "</b><br>";

switch ($warna) {
    case "merah":
        echo "Warna adalah merah.";
        break;
    case "kuning":
        echo "Warna adalah kuning.";
        break;
    case "hijau":
        echo "Warna adalah hijau.";
        break;
    case "biru":
        echo "Warna adalah biru.";
        break;
    default:
        echo "Warna tidak dikenal di sistem kami!";
}
echo "<br>";
?>