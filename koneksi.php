<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_windows";
    $koneksi = mysqli_connect($host, $username, $password, $database);
    if($koneksi){
        echo "You're connected";
    }else{
        echo "You're not connected";
    }
?>