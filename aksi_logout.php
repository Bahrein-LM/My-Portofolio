<?php
session_start();

session_unset();
session_destroy();
echo "<script> 
alert('Anda telah keluar dari akun anda !!!');
window.location.href = ('index.php');
</script>";

?>