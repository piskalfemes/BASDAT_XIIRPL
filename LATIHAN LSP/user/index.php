<html>
<head>
    <link rel="stylesheet" href="../style.css">
    <title>Tambah Data</title>
</head>
<body>
    <center>
  
    </h1>
    <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:login.php?pesan=belum_login');
        }
        ?>
        <marquee direction="left"><h4>Welcome <?php 
        $email = $_SESSION['email'];
        include '../koneksi.php';
        
        $anggota = mysqli_query($koneksi, "select * from anggota where email = '$email'");
        foreach ($anggota as $nama){
            echo $nama['nama'];
        }
        ?> anda telah login</h4></marquee>
        <p class="script">
            <span>Menampilkan Data</span>
        </p>
        <table class="table" border="1">
    <tr>
        <th>ID Buku</th>
        <th>Katalog</th>
        <th>Judul Buku</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
        <th>Penerbit</th>
        </tr>
        <?php
        include '../koneksi.php';
        $buku = mysqli_query($koneksi, "select * from buku");
        foreach ($buku as $row){
            echo "<tr>";
            echo "<td>".$id_buku = $row['id_buku']."</td>";
            echo "<td>".$id_katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul_buku = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$tahun_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <a href="update-anggota.php?id_anggota=<?php echo $nama['id_anggota']?>" class="btn btn-primary">Customize</a>
    <a href="../logout.php">LOGOUT</a>
    </center>
    </body>
</html>