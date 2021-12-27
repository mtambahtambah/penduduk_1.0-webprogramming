<?php
include './koneksi.php';
//dapat dari desa_tambah.php
$nama = $_POST['nama'];
mysqli_query($koneksi,"INSERT INTO desa(nama_desa) VALUES('$nama')");
header('location:desa.php');
?>