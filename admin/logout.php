<?php 
//untuk mengatifkan session
session_start();
//untuk menghapus semua sesssion
session_destroy();
header('location:./login.php?pesan=logout');//dilepamarkan ke halaman ini
?>