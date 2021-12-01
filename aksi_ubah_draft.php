<?php
    include("koneksi.php");

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $gambar = $_POST['gambar'];
    $artikel = $_POST['artikel'];
    $button = $_POST['button'];

    $sql = "UPDATE tb_artikel SET 
                        judul = '$judul',
                        tanggal = '$tanggal',
                        gambar = '$gambar',
                        artikel = '$artikel',
                        button = '$button'
                        WHERE id = $id ";
    $a = $koneksi->query($sql);
    if($a === true){
        echo "<script> 
        alert('Draft berhasil diubah!!!');
        window.location.href = ('buat_template.php');
        </script>";
    }else{
        echo "<script> 
        alert('Mohon coba lagi!!!');
        window.location.href = ('form_ubah_draft.php');
        </script>";
    }
?>