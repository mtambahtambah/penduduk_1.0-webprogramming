<?php 
include 'koneksi.php';//untuk menghubungkan ke koneksi.php>>mengubungkan kedata base
session_start();//untuk mengaktifkan session
$username=$_POST['uname'];
$password=md5($_POST['pass']);
$cek = mysqli_query($koneksi,"SELECT * FROM `admin` WHERE nama='$username' and `password`='$password' ");
$jumlah = mysqli_num_rows($cek);//buat mengecek variabel yg ada dicek
if($jumlah>0){
	//jika berghasil login
	$_SESSION['status'] = 'berhasil';
	header("location:./home.php");//jika berhasil akan dipindahkan ke halaman admin/login.php
}else{
	header("location:./login.php?pesan=gagal");//jika gagal akan dilemparkan kedalam halam depan index.php
	//dalam header tidak perlu menuliskan variabel ...  langsung sajja tulis pesan/eror atau yg lainya-->
	//
}
?>

