<html lang="en">
<head>
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <h1>
        <p class="script">
            <span>Tambah Data Buku</span>
        </p>
    </h1>

    <form class="tambah" action="proses-tambah.php" method="post">
        <label>ID Katalog</label><br>
        <input type="number" name="id_katalog">
        <br>
        <label>Judul Buku</label><br>
        <input type="text" name="judul_buku">
        <br>
        <label>Pengarang</label><br>
        <input type="text" name="pengarang">
        <br>
        <label>Tahun Terbit</label><br>
        <input type="date" name="thn_terbit">
        <br>
        <label>Penerbit</label><br>
        <input type="text" name="penerbit">
        <label>Harga</label><br>
        <input type="number" name="harga">
        <br>
        <input class="submit" type="submit" value="submit">
        <input class="cancel" type="reset" value="cancel">
    </form>
</body>
</html>