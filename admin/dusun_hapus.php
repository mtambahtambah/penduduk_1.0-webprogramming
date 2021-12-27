<?php
include "./koneksi.php";
$id = $_GET['id'];//get mengambil nilai dari url//mengambilnya di desa_edit.php
mysqli_query($koneksi,"DELETE FROM dusun WHERE id_dusun='$id'");
header('location:dusun.php');
?>