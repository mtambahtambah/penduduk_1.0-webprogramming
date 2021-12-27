<?php
    include "./koneksi.php";
	$nama = $_POST['nama'];
	$id   = $_POST['id'];
	mysqli_query($koneksi,"UPDATE dusun SET nama_dusun='$nama' WHERE id_dusun='$id' ");
	header('location:./dusun.php');
?>