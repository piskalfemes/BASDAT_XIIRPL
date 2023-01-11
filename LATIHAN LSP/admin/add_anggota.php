<html lang="en">
<head>
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <h1>
        <p class="script">
            <span>Tambah Data Anggota</span>
        </p>
    </h1>

    <form class="tambah" action="proses-tambah-anggota.php" method="post">
        <label>Nama</label><br>
        <input type="name" name="nama">
        <br>
        <label>No Telp</label><br>
        <input type="number" name="telp">
        <br>
        <label>Alamat</label><br>
        <input type="text" name="alamat">
        <br>
        <label>Email</label><br>
        <input type="text" name="email">
        <br>
        <label>Password</label><br>
        <input type="text" name="pass">
        <br>
        <input class="submit" type="submit" value="submit">
        <input class="cancel" type="reset" value="cancel">
    </form>
</body>
</html>