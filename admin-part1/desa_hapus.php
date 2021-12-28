<?php
include "./koneksi.php";
//dapat dari url desa.php
$id = $_GET['id'];//get mengambil nilai dari url//mengambilnya di desa_edit.php
mysqli_query($koneksi,"DELETE FROM desa WHERE id_desa='$id'");
header('location:desa.php');
?>