<?php

include '../koneksi.php';

$nama = $_POST['nama'];
$no_telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$notif = mysqli_query($koneksi,"insert into anggota values('','$nama','$no_telp','$alamat','$email','$pass')");

if($notif){
    ?>
    <script>
        alert('Data Berhasil');
        window.location='index.php';
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Data Gagal');
        window.location='index.php';
    </script>
    <?php
}

?>