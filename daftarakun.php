<?php
require 'koneksi.php';
$nik=$_POST["nik"];
$namalengkap=$_POST["namalengkap"];
$alamat=$_POST["alamat"];
$email=$_POST["email"];
$katasandi=$_POST["katasandi"];

$daftar = "INSERT INTO tbl_pengguna (`NIK`, `Nama Lengkap`, `Alamat`, `Email`, `Kata Sandi`) VALUES ('$nik', '$namalengkap', '$alamat', '$email', '$katasandi')";

if(mysqli_query($conn, $daftar)) {
    header("Location: login.html");
} else {
    echo "Pendaftaran Gagal" . mysqli_error($conn);
}
?>