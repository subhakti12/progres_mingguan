<?php
$npm_mhs = $_POST['npm'];
$nilai_mhs = $_POST['nilai'];
$perulangan = $_POST['ulangi'];

if ($nilai_mhs != "") {
    if ($nilai_mhs >= 85) {
        $huruf_mutu = 'A';
    } elseif ($nilai_mhs >= 75) {
        $huruf_mutu = 'B';
    } elseif ($nilai_mhs >= 65) {
        $huruf_mutu = 'C';
    } else {
        $huruf_mutu = 'E';
    }

    for ($x = 0; $x < $perulangan; $x++) {
        echo $npm_mhs . " Nilai mata kuliah kamu adalah: " . $huruf_mutu . "<br>";
    }
}
?>
