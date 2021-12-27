<?php 
//saat kita mendownload xcampp localhost serverya ("localhost,")
//defaultnya root ("localhost,"root")
//buat mempaspor data base karena tidak dipaspor dikosongkan("loaclhost","root","")
//karena filenya di mysql penduduk ("localhost","root","","penduduk")
$koneksi = mysqli_connect("localhost","root","","penduduk");//untuk menghubungkan kedata base
//disini untuk mengetahui koneksi terhubung tidaknya sama database
//bisa dicoba dengan localhost/penduduk.koneksi.php
//jika kosong berarti sukses
if(mysqli_connect_errno()){
	echo "koneksi database gagal";
}
?>