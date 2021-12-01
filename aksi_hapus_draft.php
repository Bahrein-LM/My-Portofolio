<?php
    include("koneksi.php");

    $id = $_POST['id'];

    $sql = " DELETE FROM tb_artikel WHERE id = '$id'";
    $a = $koneksi->query($sql);
    if($a === true){
        echo "<script> 
        alert('anda berhasil menghapus draft !!!!');
        window.location.href = ('buat_template.php');
        </script>";
    }else{
        echo "<script> 
        alert('Mohon coba lagi !!!');
        window.location.href = ('form_hapus_draft.php');
        </script>";
    }
?>
