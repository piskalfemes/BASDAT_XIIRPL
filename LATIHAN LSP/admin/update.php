<html>
<head>
    <title>Update Data</title>    
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p class="script">
        <span>Menampilkan Data</span>
    </p>
    <?php
    include '../koneksi.php';
    $id_buku = $_GET['id_buku'];
    $data = mysqli_query($koneksi, "select * from buku where id_buku = '$id_buku'");
    // dataa yang sudah di cocokan dengan id_buku , di meledak menggunakakn facth array sehingga bisa di taro satu satu di formny
    while($meledak = mysqli_fetch_array($data)){
    ?>
    <form class="tambah" action="proses-update.php" method="post">
        <label>Masukan Id Buku</label>
        <br>
        <input type="" name="id_buku" value="<?php echo $meledak['id_buku'];?>" placeholder="Masukan ID Buku">
        <br>
        <label>Masukan Id Katalog</label>
        <br>
        <input type="number" name="id_katalog" value="<?php echo $meledak ['id_katalog'];?>" placeholder="Masukkan ID Katalog">
        <br>
        <label>Masukan Judul Buku</label>
        <br>
        <input type="text" name="judul_buku"value="<?php echo $meledak ['judul_buku'];?>" placeholder="Masukkan Judul Buku">
        <br>
        <label>Masukan pengarang</label>
        <br>
        <input type="text" name="pengarang"value="<?php echo $meledak ['pengarang'];?>" placeholder="Masukkan Nama Pengarang">
        <br>
        <label>Masukan Tahun Terbit</label>
        <br>
        <input type="date" name="thn_terbit"value="<?php echo $meledak ['thn_terbit'];?>" placeholder="Masukkan Tahun Terbit">
        <br>
        <label>Masukan penerbit</label>
        <br>
        <input type="text" name="penerbit"value="<?php echo $meledak ['penerbit'];?>" placeholder="Masukkan Penerbit">
        <br>
        <label>Masukan Harga</label>
        <br>
        <input class="text" name="harga"value="<?php echo $meledak ['harga'];?>" placeholder="Masukan harga">
        <input class="sumbit" type="submit" value="submit"></input>
        <input class="cancel" type="reset" value="cancel"></input>
    </form>
    <?php
    }
    ?>
</body>
</html>