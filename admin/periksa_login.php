<?php 
//untuk mengaktifkan session
session_start();
if($_SESSION['status']==''){
	header('location:./login.php?pesan=belumlogin');
}
?>