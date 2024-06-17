<?php
// Membuat 2 variabel
$nama_mahasiswa = "Viaaa";
$nama_kamu = "Subhaktiiii";
$pekerjaan = "karyawan swasta";

// Inisialisasi variabel jenis_kelamin dan penghasilan_bulanan
$jenis_kelamin = "???";
$penghasilan_bulanan = "0";

if ($nama_mahasiswa == "Viaaa") {
    if ($pekerjaan == "pengusaha") {
        $jenis_kelamin = "Perempuan";
        $penghasilan_bulanan = "100000000";
    } else {
        $jenis_kelamin = "Perempuan";
        $penghasilan_bulanan = "400000000";
    }
} elseif ($nama_kamu == "Subhaktiiii") {
    $jenis_kelamin = "Laki-Laki";
    $penghasilan_bulanan = "Tidak diketahui";
}

echo "Hallo " . $nama_mahasiswa . ". Selamat datang, Saya " . $nama_kamu . ", karena jenis kelamin kamu adalah " . $jenis_kelamin . ". Penghasilan anda " . $penghasilan_bulanan;
?>

<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <br>
        Langsung aja kita login
    </body>
</html>
