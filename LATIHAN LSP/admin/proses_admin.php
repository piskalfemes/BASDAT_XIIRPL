<?php
session_start();
include '../koneksi.php';

$username = $_POST['admin'];
$password = $_POST['pass'];

$data = mysqli_query($koneksi, "select * from admin where username='$username' and password='$password'");

$cek_data = mysqli_num_rows($data);

if ($cek_data > 0) {
    $_SESSION['admin'] = $username;
    $_SESSION['status'] = 'login';
    header("location:index.php");
} else {
    header("location:login_admin.php?pesan=gagal");
}
?>