<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
      
    <p class="script">
            <span>Login Aplikasi</span>
        </p>
        <h6>Admin Access</h6>
        <form action="proses_admin.php" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td></td>
                    <td><input type="text" name="admin" id="admin" placeholder="Masukan Username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td></td>
                    <td><input type="password" name="pass" id="pass" placeholder="Masukan Pass"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="login"></td>
                </tr>
                <tr>
                    <td>user klik <a href="../user/login.php">sini</a></td>
                </tr>
            </table>
        </form>
        </center>
    </body>
</html>