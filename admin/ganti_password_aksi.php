<?php 
INCLUDE './koneksi.php';
$pass = md5($_POST['Password']);
mysqli_query($koneksi,"UPDATE `admin` SET `password`='$pass' ");
header("location:ganti_password.php?pesan=pasten");
?>