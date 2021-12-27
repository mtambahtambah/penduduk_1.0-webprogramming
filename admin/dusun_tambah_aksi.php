<?php
include "./koneksi.php";
//dapat dari desa_tambah.php
$nama = $_POST['nama'];
mysqli_query($koneksi,"INSERT INTO dusun(nama_dusun) VALUES('$nama')");
header('location:dusun.php');
?>