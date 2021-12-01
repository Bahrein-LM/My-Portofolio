<?php
        include("koneksi.php");
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $tanggal = $_POST['tanggal'];
        $gambar = $_POST['gambar'];
        $artikel = $_POST['artikel'];
        $button = $_POST['button'];

        $sql = " INSERT INTO tb_artikel VALUES ('$id', '$judul', '$tanggal', '$gambar', '$artikel', '$button')";
        $a = mysqli_query($koneksi, $sql);
        if($a === true){
                echo "<script> 
                alert ('Draft berhasil ditambahkan !!!!');
                window.location.href = ('buat_template.php');
                </script>";
        }else{
                echo mysqli_error($koneksi);
                // echo "<script> 
                // alert ('Mohon coba lagi !!!');
                // window.location.href = ('form_draft_baru.php');
                // </script>";
        }
?>