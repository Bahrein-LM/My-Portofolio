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
        <form action="aksi_hapus_draft.php" method="POST">
            <table>
                <tr>
                    <td>Masukkan ID Draft!!</td>
                </tr>
                <tr>
                    <td>Id Draft:</td>
                    <td><input type="text" name="id" required></td>        
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