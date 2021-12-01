<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">     
        <title>Mewakili Database</title>
    </head>
    <body>
        <h1>Masukkan Draft Baru Anda!!!</h1>
        <br>
        <br>
        <form action="aksi_draft_baru.php" method="POST">
            <table>
                <tr>
                    <td>Id Draft:</td>
                    <td><input type="number" name="id" required></td>        
                </tr>
                <tr>
                    <td>Judul:</td>
                    <td><input type="text" name="judul" required></td>        
                </tr>
                <tr>
                    <td>Tanggal:</td>
                    <td><input type="text" name="tanggal" required></td>
                </tr>
                <tr>
                    <td>Gambar:</td>
                    <td><input type="text" name="gambar" required></td>
                </tr>
                <tr>
                    <td>Artikel:</td>
                    <td><input type="text" name="artikel" required></td>
                </tr>
                <tr>
                    <td>Button:</td>
                    <td><input type="text" name="button" required></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="SUBMIT"></td>
                    <td><input type="reset" name="reset" value="RESET"></td>
                    <td><a href="buat_template.php">Back</a></td>
                </tr>
            </table>
        </form>
    </body>
    <footer>
    
    </footer>
</html>