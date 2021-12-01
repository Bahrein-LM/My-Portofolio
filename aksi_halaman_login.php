<?php
    session_start();
    include("koneksi.php");
    $username = $_POST['username'];
    $password = md5($_POST['password']);

        $sql = "SELECT * FROM tb_akun WHERE username='$username' AND password='$password'";
        $con = $koneksi->query($sql);
        if($con == true){
            echo "<script> 
            alert('Anda berhasil login !');
            window.location.href = ('halaman_user.php');
            </script>";
        }else{
            echo "<script> 
            alert('Mohon coba lagi !');
            window.location.href = ('halaman_login.php');
            </script>";
        }
?>