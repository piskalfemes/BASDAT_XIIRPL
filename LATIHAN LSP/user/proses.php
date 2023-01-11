<?php
session_start();
include '../koneksi.php';

$email = $_POST['email'];
$password = $_POST['pass'];

$data = mysqli_query($koneksi, "select * from anggota where email='$email' and password='$password'");

$cek_data = mysqli_num_rows($data);

if ($cek_data > 0) {
    $_SESSION['email'] = $email;
    $_SESSION['status'] = 'login';
    header("location:index.php");
} else {
    header("location:login.php?pesan=gagal");
}
?>