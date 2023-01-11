<html>
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
    <center>
   
    <?php
    session_start();
    if($_SESSION['status']!='login'){
        header('location:login_admin.php?pesan=belum_login');
    }
    // ambil data semua dari tabel buku
    include '../koneksi.php';
    $buku = mysqli_query($koneksi, "SELECT * FROM buku");
    $anggota = mysqli_query($koneksi, "SELECT * FROM anggota");
    $harga = mysqli_query($koneksi, "SELECT * FROM harga");

    // jumlahkan data yg ada di tabel
    $jumlah_buku = mysqli_num_rows($buku);
    $jumlah_anggota = mysqli_num_rows($anggota);
    ?>

    <!-- END -->
    <div class="card-header">
        <marquee direction="left"> <h4>Welcome <?php echo $_SESSION['admin']?> anda telah Login</h4></marquee>
    </div>
    </div>
    <p class="script">
    <span>Menampilkan Data</span>
    </p>        
    <h3>Data Buku</h3>
    <a href="add.php" type="button" class="btn btn-primary">Tambah Buku</a>
    <h3>
        TOTAL HARGA :
        <?php
        $db = mysqli_query($koneksi, "SELECT * FROM buku;");
        while($r = mysqli_fetch_array($db)){
            $h[] = $r['harga'];
        }
        $totalHarga = array_sum($h);
        echo "Rp. " . number_format($totalHarga) . " ,-";
        ?>
        </h3>
    <h3>TOTAL BUKU TERSEDIA : <?php echo $jumlah_buku;?></h3>
    <table class="table" border="1">
        <tr>
        <th>Id Buku</th>
        <th>Katalog</th>
        <th>Judul Buku</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
        <th>Penerbit</th>
        <th>Harga</th>
        <th><center>Edit</center></th>
    </tr>
    <!-- menampilkan data buku -->
    <?php 
    include '../koneksi.php';
    $buku = mysqli_query($koneksi, "SELECT * FROM buku");
    foreach ($buku as $row){
        echo "<tr>";
        echo "<td>".$id_buku = $row['id_buku']."</td>";
        echo "<td>".$katalog = $row['id_katalog']."</td>";
        echo "<td>".$judul = $row['judul_buku']."</td>";
        echo "<td>".$pengarang = $row['pengarang']."</td>";
        echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
        echo "<td>".$penerbit = $row['penerbit']."</td>";
        echo "<td>".$harga =$row['harga']."</td>";
        ?>
        <td> 
            <center>
                <a href="update.php?id_buku=<?php echo $row['id_buku']?>" type="button" class="btn btn-warning">EDIT</a>
                <a href="proses-delete.php?id_buku=<?php echo $row['id_buku']?>" type="button" class="btn btn-danger">HAPUS</a>
                </center>
        </td>
        <?php 
        echo "</tr>";
        }
        ?>
        </table>
    
    <h3>Data Anggota</h3>
        <a href="add_anggota.php" type="button" class="btn btn-info">Tambah Anggota</a>
    <table class="table" border="1">
    <tr>
        <th>Id Anggota</th>
        <th>Nama</th>
        <th>NO Telp</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Password</th>
    </tr>

    <h3>TOTAL ANGGOTA TERSEDIA : <?php echo $jumlah_anggota;?></h3>
    <?php 
    include '../koneksi.php';
    $anggota = mysqli_query($koneksi, "SELECT * FROM anggota");
    foreach ($anggota as $rov){
        echo "<tr>";
        echo "<td>".$id_anggota = $rov['id_anggota']."</td>";
        echo "<td>".$nama = $rov['nama']."</td>";
        echo "<td>".$no_telp = $rov['no_telp']."</td>";
        echo "<td>".$alamat = $rov['alamat']."</td>";
        echo "<td>".$email = $rov['email']."</td>";
        echo "<td>".$password = $rov['password']."</td>";
        ?>
    
        <?php 
        echo "</tr>";
    }
    ?>
    </table>
</body>
        <a href="../logout.php">LOGOUT</a>
</html>