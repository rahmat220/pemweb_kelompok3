<?php
require 'koneksi.php';

$email = $_POST["email"];
$katasandi = $_POST["katasandi"];

$pilih = "SELECT * FROM tbl_pengguna WHERE Email='$email' AND `Kata Sandi`='$katasandi'";
$hasil = mysqli_query($conn, $pilih);

if (mysqli_num_rows($hasil) > 0) {
    header("Location: main.html");
    exit(); // Tambahkan exit setelah header
} else {
    echo "<center><h1>Email atau Kata Sandi salah!!! silahkan coba lagi!</h1><button><strong><a href='login.html'>Login</a></strong></button></center>";
}
?>