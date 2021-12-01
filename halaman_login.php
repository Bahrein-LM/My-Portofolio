<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="halaman_login.css">        
        <title>Halaman Login</title>
    </head>
    <body>
        <h1>Welcome To Login Form!!!</h1>
        <form action="aksi_halaman_login.php" method="POST">
            <table>
                <tr>
                    <td>Login</td>
                    <td><input type="text" name="username" required></td>        
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="LOGIN"></td>
                    <td><input type="reset" name="reset" value="RESET"></td>
                    <td><a href="halaman_daftar_akun.php">Sign Up</a></td>
                </tr>
            </table>
        </form>
    </body>
    <footer>
    
    </footer>
</html>