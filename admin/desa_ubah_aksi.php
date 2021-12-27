<?php
    include "./koneksi.php";
	//dapat dari desa_edit.php
	$nama = $_POST['nama'];
	$id   = $_POST['id'];
	mysqli_query($koneksi,"UPDATE desa SET nama_desa='$nama' WHERE id_desa='$id' ");
	header('location:./desa.php');
?>