<?php
    include("koneksi.php");
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
        
        $sql = "INSERT INTO tb_akun (nama, username, password) 
            VALUES ('".$name."','".$username."','".$password."')";
        $a = $koneksi -> query($sql);
        if($a === true){
            echo "<script> 
            alert('Anda telah sukses registrasi !');
            window.location.href = ('halaman_login.php');
            </script>";
        }else{
            echo "<script> 
            alert('Mohon coba lagi !');
            window.location.href = ('halaman_daftar_akun.php');
            </script>";
        }
   
?>