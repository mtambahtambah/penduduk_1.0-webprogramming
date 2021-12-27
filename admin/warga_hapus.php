<?php 
include './koneksi.php';
//dapat dari url desa.php
$id = $_GET['id'];//get mengambil nilai dari url//mengambilnya di desa_edit.php
mysqli_query($koneksi,"DELETE FROM warga WHERE warga_id='$id'");
header('location:warga.php');
?>