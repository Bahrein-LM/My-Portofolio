<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="halaman_login.css">        
        <title>Halaman Daftar Akun</title>
    </head>
    <body>
        <h1>Welcome To Register Form!!!</h1>
        <form action="aksi_halaman_daftar_akun.php" method="POST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="name" required></td>        
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="DAFTAR"></td>
                    <td><input type="reset" name="reset" value="RESET"></td>
                </tr>
            </table>
        </form>
    </body>
    <footer>
    
    </footer>
</html>