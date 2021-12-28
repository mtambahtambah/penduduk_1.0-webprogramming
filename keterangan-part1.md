# penduduk v1.0
gasken bosque yo.

## struktur aplikasi
<ul>
    <li>penduduk 1_0</li>
    <ul>
        <li>admin</li>
        <li>kebutuhan_zip</li>
        <li>modal</li>
        <li>upload</li>
    </ul>
</ul>

## database
```sql
-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 04:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penduduk`
--
CREATE DATABASE IF NOT EXISTS `penduduk` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `penduduk`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'ochi', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE IF NOT EXISTS `desa` (
  `id_desa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_desa` varchar(50) NOT NULL,
  PRIMARY KEY (`id_desa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id_desa`, `nama_desa`) VALUES
(1, 'babat'),
(2, 'cakung'),
(3, 'sukaraharja');

-- --------------------------------------------------------

--
-- Table structure for table `dusun`
--

CREATE TABLE IF NOT EXISTS `dusun` (
  `id_dusun` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dusun` varchar(50) NOT NULL,
  PRIMARY KEY (`id_dusun`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dusun`
--

INSERT INTO `dusun` (`id_dusun`, `nama_dusun`) VALUES
(12, 'abah priok'),
(13, 'abah naning');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE IF NOT EXISTS `warga` (
  `warga_id` int(11) NOT NULL AUTO_INCREMENT,
  `warga_nama` varchar(50) NOT NULL,
  `warga_ktp` int(20) NOT NULL,
  `warga_jk` varchar(15) NOT NULL,
  `warga_desa` int(11) NOT NULL,
  `warga_dusun` int(11) NOT NULL,
  `warga_rt` varchar(5) NOT NULL,
  `warga_rw` varchar(5) NOT NULL,
  `warga_status` varchar(15) NOT NULL,
  `warga_pendidikan` varchar(5) NOT NULL,
  `warga_agama` varchar(15) NOT NULL,
  PRIMARY KEY (`warga_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`warga_id`, `warga_nama`, `warga_ktp`, `warga_jk`, `warga_desa`, `warga_dusun`, `warga_rt`, `warga_rw`, `warga_status`, `warga_pendidikan`, `warga_agama`) VALUES
(50, 'aryo seto', 1212122, 'Laki-laki', 1, 12, '01', '09', 'Kawin', 'SD', 'Buddha'),
(51, 'kamila', 121323323, 'Perempuan', 1, 13, '06', '09', 'Belum Kawin', 'SMA', 'Kristen'),
(52, 'amar', 9090909, 'Laki-laki', 3, 12, '09', '02', 'Belum Kawin', 'SMP', 'Kristen'),
(53, 'jana', 2323537, 'Laki-laki', 2, 13, '02', '01', 'Kawin', 'SMP', 'Hindu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
```

## login.php
buat file login.php didalam folder admin:
```html
<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login #10</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="..." method="..." class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>
```
ubah
```html
<!-- css -->
<link rel="stylesheet" href="./../login-form-20/css/style.css">
<!-- background -->
<body class="img js-fullheight" style="background-image: url(./../login-form-20/images/bg.jpg);">
<!-- js -->
<script src="./../login-form-20/js/jquery.min.js"></script>
<script src="./../login-form-20/js/popper.js"></script>
<script src="./../login-form-20/js/bootstrap.min.js"></script>
<script src="./../login-form-20/js/main.js"></script>
```

## koneksi.php
buat file koneksi.php didalam folder admin:
```php
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
```

## p_login.php
buat file p_login.php
```php
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
	header("location:./login?pesan=gagal");//jika gagal akan dilemparkan kedalam halam depan index.php
	//dalam header tidak perlu menuliskan variabel ...  langsung sajja tulis pesan/eror atau yg lainya-->
	//
}
```

## head.php
buat file head.php di folder admin
```php
<!doctype html>
<html lang="en">

<head>
  <title>Hello, world!</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="./../modal/adminlte_MaterialDashboard_2020-master/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="././../modal/adminlte_MaterialDashboard_2020-master/assets/img/sidebar-2.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="javascript:void(0)">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">notifications</i>
                  <p class="d-lg-none d-md-block">
                    Notifications
                  </p>
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
```
## home.php
buat file home.php di folder admin
```php
<?php include './head.php'; ?>
<!-- your content here -->
<h1>Berhasil Login</h1>        
<?php include './footer.php'; ?>
```
## footer.php
buat file footer.php di folder admin
```php
</div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="././../modal/adminlte_MaterialDashboard_2020-master/assets/js/core/jquery.min.js"></script>
  <script src="././../modal/adminlte_MaterialDashboard_2020-master/assets/js/core/popper.min.js"></script>
  <script src="././../modal/adminlte_MaterialDashboard_2020-master/assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="././../modal/adminlte_MaterialDashboard_2020-master/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="././../modal/adminlte_MaterialDashboard_2020-master/assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="././../modal/adminlte_MaterialDashboard_2020-master/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="././../modal/adminlte_MaterialDashboard_2020-master/assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="././../modal/adminlte_MaterialDashboard_2020-master/assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>
```

## p.login.php
tambahkan source code berikut:
```php
if(isset($_GET['pesan'])){
	if($_GET['pesan']=='gagal'){
		echo "<div class='alert alert-danger text-center'><b>\"Maaf! Username/Password anda salah..!!\"</b></div>";
	}
	else if($_GET['pesan']=='logout'){
		echo "<div class='alert alert-success text-center'><b>\"Anda Telah Logout..!!\"</b></div>";
	}
	else if($_GET['pesan']=='belumlogin'){
		echo "<div class='alert alert-warning text-center'><b>\"Anda Harus Login..!!\"</b></div>";
	}
}
```

## periksa_login.php
buat file periksa_login.php
```php
//untuk mengaktifkan session
session_start();
if($_SESSION['status']==''){
	header('location:../login.php?pesan=belumlogin');
}
```

## head.php
tambahkan source code berikut:
```php
include "./periksa_login.php";
// include "./koneksi.php";
```
dan
```html
<li class="nav-item active  ">
  <a class="nav-link" href="./logout.php">
    <i class="material-icons">dashboard</i>
    <p>Log out</p>
  </a>
</li>
```

## logout.php
buat file logout.php di folder admin:
```php
//untuk mengatifkan session
session_start();
//untuk menghapus semua sesssion
session_destroy();
header('location:./login.php?pesan=logout');//dilepamarkan ke halaman ini
```

## head.php
tambahkan source code berikut:
```html
<li class="nav-item active  ">
  <a class="nav-link" href="./desa.php">
    <i class="material-icons">dashboard</i>
    <p>desa</p>
  </a>
</li>
```
kemudian buka segel karma
```php
// include "./koneksi.php";
```

## desa_tambah.php
buat dalam folder admin
```php
		<div class="container">
			<div class="row">
				<div class="col-md-12 mx-auto">
					<div class="card">
						<div class="card-body">
							<h3>Tambah Desa</h3>
							<p class="text-muted">Tambah Desa Baru</p>
							<hr>
							<form action="desa_tambah_aksi.php" method="post">
								<div class="form-group">
									<label>Nama Desa</label>
									<input type="text" name="nama" required="required" class="form-control mb-2">
									<!--from control untuk memenuhi kotak input -->
									<input type="submit" name="submit" value="simpan" class="btn btn-success  btn-block">
									<!--btn-block untuk memenuhi kotal submit -->
								</div>
							</form>
						</div>
					</div> 
				</div>
			</div>
		</div>	
```

## desa_tambah_aksi.php
buat dalam folder admin:
```php
INCLUDE '../koneksi.php';
//dapat dari desa_tambah.php
$nama = $_POST['nama'];
mysqli_query($koneksi,"INSERT INTO desa(nama_desa) VALUES('$nama')");
header('location:desa.php');
```

## desa_ubah.php
buat dalam folder admin:
```html
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<div class="card">
						<div class="card-body">
							<h3>Edit Desa</h3>
							<p class="text-muted">Edit Desa Baru</p>
							<hr>
							<form action="desa_update.php" method="post">

								<?php 
								$id = $_GET['id'];
								$data = mysqli_query($koneksi,"SELECT * FROM desa WHERE id_desa=('$id') ");//wajib $koneksi karena berhubungan database
								while($d = mysqli_fetch_array($data)){
								?>
								<div class="form-group">
									<label>Nama Desa</label>
									<input type="text" name="nama" required="required" value="<?php echo $d['nama_desa']; ?>" class="form-control mb-2">
									<input type="hidden" name="id" value="<?php  echo $d['id_desa'];?>" class="form-control">
									<!--hidden biar disembunyikan-->
								<?php
									 }
								 ?>
									
								</div>
								<input type="submit" name="submit" value="simpan" class="btn btn-success btn-block">
									
							</form>

						</div>
					</div> 
				</div>
			</div>
		</div>	
```

## desa_ubah_aksi.php
buat dalam folder admin:
```php
 include "./koneksi.php";
	//dapat dari desa_edit.php
	$nama = $_POST['nama'];
	$id   = $_POST['id'];
	mysqli_query($koneksi,"UPDATE desa SET nama_desa='$nama' WHERE id_desa='$id' ");
	header('location:./desa.php');
```


## desa_hapus.php
buat dalam folder admin:
```php
include "./koneksi.php";
//dapat dari url desa.php
$id = $_GET['id'];//get mengambil nilai dari url//mengambilnya di desa_edit.php
mysqli_query($koneksi,"DELETE FROM desa WHERE id_desa='$id'");
header('location:desa.php');
```

## head.php
tambahkan source code berikut:
```html
<li class="nav-item active  ">
  <a class="nav-link" href="./dusun.php">
    <i class="material-icons">dashboard</i>
    <p>dusun</p>
  </a>
</li>
```

## dusun.php
buat dalam folder admin:
```html
		<div class="container">
			<div class="row">
				<div class=" col-md-8  mx-auto"> <!--mx-auto agar ke tengah -->
					<div class="card">
						<div class="card-body">
							<h3>Data Dusun</h3>
							<p class="text-muted">Semua Data Dusun</p>
							<hr>
							<a href="dusun_tambah.php" class="btn btn-success text-white mb-2 btn-sm ">Tambah Dusun Baru</a>

								<table class="table table-bordered table-striped table-hover table-saya">
									<thead><!--kalo menggunakan data table jquery dan css wajib menggunakan thead dan tbody dan kasih class/id bebas seperti table-saya -->
											<tr>
												<th width="1%">NO</th>
												<th>NAMA DUSUN</th>
												<th width="20%">OPSI</th>
											</tr>
									</thead>	


									<tbody>
											<?php 
											$no = 1;//untuk mengasih nilai variabel sama dengan satu
											$dusun = mysqli_query($koneksi,"SELECT * FROM dusun");//$koneksi disini wajib karena berhubungan dengan data base
											while ($d= mysqli_fetch_array($dusun)){//pembukaan perulangan 
													//fetch_array untuk menampilkan databse desa1 secara perulangan array

											?>
											<tr>
												<td>
													<?php echo $no++;//karena didalam perulangan artinya 1+1 terus menerus dan hanya memunculkan nomer ?>
														
												</td>
												<td>
													<?php echo $d['nama_dusun'];//output ?>
														
												</td>
												<td>
													<a href="dusun_Edit.php?id=<?php echo $d['id_dusun']; ?>" class="btn btn-warning text-white btn-sm"><!-- btn-sm artinya small bisa pake lg-->
													Edit
													</a>
													<a href="dusun_hapus.php?id=<?php echo $d['id_dusun']; ?>" class="btn btn-danger text-white btn-sm">
													Hapus
													</a>
												</td>
											</tr>
											<?php 
													}//menutup perulangan
											?>
									</tbody>

								</table>
						</div>
					</div> 
				</div>
			</div>			
		</div>	
```

## dusun_tambah.php
buat dalam folder admin:
```html
<?php include './head.php'; ?>
<div class="container">
  <div class="row">
    <div class="col-md-12 mx-auto">
      <div class="card">
        <div class="card-body">
          <h3>Tambah Dusun</h3>
							<p class="text-muted">Tambah Dusun Baru</p>
							<hr>
							<form action="dusun_tambah_aksi.php" method="post">
                <div class="form-group">
                  <label>Nama Dusun</label>
									<input type="text" name="nama" required="required" class="form-control mb-2">
									<!--from control untuk memenuhi kotak input -->
									<input type="submit" name="submit" value="simpan" class="btn btn-success  btn-block">
									<!--btn-block untuk memenuhi kotal submit -->
								</div>
							</form>
						</div>
					</div> 
				</div>
			</div>
		</div>	
<?php include './footer.php'; ?>
```
## dusun_tambah_aksi.php
buat dalam folder admin:
```php
include "./koneksi.php";
//dapat dari desa_tambah.php
$nama = $_POST['nama'];
mysqli_query($koneksi,"INSERT INTO dusun(nama_dusun) VALUES('$nama')");
header('location:dusun.php');
```

## dusun_ubah.php
buat dalam folder admin:
```php
<?php include './head.php'; ?>
<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<div class="card">
						<div class="card-body">
							<h3>Edit Desa</h3>
							<p class="text-muted">Edit Desa Baru</p>
							<hr>
							<form action="dusun_ubah_aksi.php" method="post">

								<?php 
								$id = $_GET['id'];
								$data = mysqli_query($koneksi,"SELECT * FROM dusun WHERE id_dusun=('$id') ");//wajib $koneksi karena berhubungan database
								while($d = mysqli_fetch_array($data)){
								?>
								<div class="form-group">
									<label>Nama Desa</label>
									<input type="text" name="nama" required="required" value="<?php echo $d['nama_dusun']; ?>" class="form-control mb-2">
									<input type="hidden" name="id" value="<?php  echo $d['id_dusun']?>" class="form-control">
									<!--hidden biar disembunyikan-->
								<?php
									 }
								 ?>
									
								</div>
								<input type="submit" name="submit" value="simpan" class="btn btn-success btn-block">
									
							</form>

						</div>
					</div> 
				</div>
			</div>
		</div>	
<?php include './footer.php'; ?>        
```
## dusun_ubah_aksi.php
buat dalam folder admin:
```php
	$nama = $_POST['nama'];
	$id   = $_POST['id'];
	mysqli_query($koneksi,"UPDATE dusun SET nama_dusun='$nama' WHERE id_dusun='$id' ");
	header('location:./dusun.php');
```
## dusun_hapus.php
buat dalam folder admin:
```php
include "./koneksi.php";
$id = $_GET['id'];//get mengambil nilai dari url//mengambilnya di desa_edit.php
mysqli_query($koneksi,"DELETE FROM dusun WHERE id_dusun='$id'");
header('location:./dusun.php');
```


## head.php
tambahkan source code berikut:
```html
<li class="nav-item active  ">
  <a class="nav-link" href="./warga.php">
    <i class="material-icons">dashboard</i>
    <p>warga</p>
  </a>
</li>
```

## warga.php
buat dalam folder admin:
```html
<?php include './head.php'; ?>
<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<h3>Data Warga</h3>
					<p class="text-muted">Semua Data Warga</p>
					<hr>
					<div class="row">
						<div class="col-md-12 mx-auto" >
							<div class="card bg-dark">
								<div class="card-body">
									<form  method="get" action="warga_filter.php" >
										<div class="form-group">
											<label>Filter Desa</label>
											<select name="desa" class="form-control bg-dark" required="required">
												<option value="">- Pilih -</option>
												<?php
													//desa sama dengan menampilkan semua data dari desa1 
													$desa = mysqli_query($koneksi,"SELECT * FROM  desa");
													while ($d=mysqli_fetch_array($desa)) {
												?>
												<!--semua data dari desa1 yg nilainnya id_desa1  ada beberapa desa-->
												<!--kemudian yg dipinta tampilkan nama_desa1 --> 
												<option  value="<?php echo $d['id_desa']; ?>"><?php echo $d['nama_desa']; ?></option>
												<?php } ?>
							
											</select>
										</div>
										<input type="submit" name="submit" value="Tampilkan Data" class="btn btn-success btn-dark">
									</form>
								</div>
							</div>
						</div>
					</div>

					<a href="warga_tambah.php" class="btn btn-success btn-sm mb-5">Tambah Warga</a>
					<a href="warga_cetak.php" class="btn btn-primary btn-sm mb-5 float-right" target="_blank">Cetak</a>
					<!--float-right agar button beara disamping kanan -->

					<table class="table table-bordered  table-hover table-saya">
						<thead><!--kalo menggunakan data table jquery dan css wajib menggunakan thead dan tbody dan kasih class/id bebas seperti table-saya -->
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>No.KTP</th>
									<th>JK</th>
									<th>Desa</th>
									<th>Dusun</th>
									<th>RT</th>
									<th>RW</th>
									<th>Status</th>
									<th>Pendidikan</th>
									<th>Agama</th>
									<th width="11%">Opsi</th>
								</tr>

						</thead>
					
											<tbody>
												
											<?php
											$no =1; 
											$warga = mysqli_query($koneksi,"SELECT * FROM warga,desa,dusun WHERE warga_desa=id_desa AND warga_dusun=id_dusun ORDER BY warga_id ASC");
											while ($w = mysqli_fetch_array($warga)) {
												
											?>
											<tr>
												<td ><?php echo $no++ ?></td>
												<td><?php echo $w['warga_nama']?></td>
												<td><?php echo $w['warga_ktp']?></td>
												<td><?php echo $w['warga_jk']?></td>
												<td><?php echo $w['nama_desa']?></td>
												<td><?php echo $w['nama_dusun']?></td>
												<td><?php echo $w['warga_rt']?></td>
												<td><?php echo $w['warga_rw']?></td>
												<td><?php echo $w['warga_status']?></td>
												<td><?php echo $w['warga_pendidikan']?></td>
												<td><?php echo $w['warga_agama']?></td>
												<td>
													<a href="warga_edit.php?id=<?php echo $w['warga_id'] ?>" class="btn btn-warning btn-sm text-white">Edit</a>
													<a href="warga_Hapus.php?id=<?php echo $w['warga_id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
												</td>
											</tr>
										<?php 
												}
										 ?>
										 </tbody>
										</table>
									</div>
								</div> 
							</div>	
<?php include './footer.php'; ?>                            
```
## warga_tambah.php
buat dalam folder admin:
```html
<?php 
	include 'head.php';
?>
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<div class="card mb-5">
						<div class="card-body">
							<h3>Tambah Warga</h3>
							<p class="text-muted">Tambah Data Warga</p>
							<hr>
							<a href="warga.php" class="btn btn-success btn-sm mb-5">Kembali</a>

							<form action="warga_tambah_aksi.php" method="post">
								<div class="form-group">
									<label>Nama</label>
									<input type="text" name="nama" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>No.KTP</label>
									<input type="number" name="ktp" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<select name="jk" class="form-control" required="required">
										<option value="">- Pilih -</option>
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
								<div class="form-group">
									<label>Desa</label>
									<select name="desa" class="form-control" required="required">
										<option value="">- Pilih -</option>
										<?php
											$desa = mysqli_query($koneksi,"SELECT * FROM  desa");
											while ($d=mysqli_fetch_array($desa)) {
										?>
										<option value="<?php echo $d['id_desa']; ?>"><?php echo $d['nama_desa']; ?></option>
										<?php } ?>
										
									</select>
								</div>
								<div class="form-group">
									<label>Dusun</label>
									<select name="dusun" class="form-control" required="required">
										<option value="">- Pilih -</option>
										<?php
											$dusun = mysqli_query($koneksi,"SELECT * FROM  dusun");
											while ($d=mysqli_fetch_array($dusun)) {
										?>
										<option value="<?php echo $d['id_dusun']; ?>"><?php echo $d['nama_dusun']; ?></option>
										<?php } ?>
										
									</select>
								</div>
								<div class="form-group">
									<label>RT</label>
									<input type="text" name="rt" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>RW</label>
									<input type="text" name="rw" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>Status</label>
									<select name="status" class="form-control">
										<option value=""> - Pilih -</option>
										<option value="Kawin">Kawin</option>
										<option value="Belum Kawin">Belum Kawin</option>
									</select>
								</div>
								<div class="form-group">
									<label>Pendidikan</label>
									<select name="pendidikan" class="form-control">
										<option value=""> - Pilih -</option>
										<option value="SD">SD</option>
										<option value="SMP">SMP</option>
										<option value="SMA">SMA</option>
										<option value="S2">S2</option>
										<option value="S3">S3</option>
									</select>
								</div>
								<div class="form-group">
									<label>Agama</label>
									<select name="agama" class="form-control">
										<option value=""> - Pilih -</option>
										<option value="Islam">Islam</option>
										<option value="Kristen">Kristen</option>
										<option value="Hindu">Hindu</option>
										<option value="Buddha">Buddha</option>
										<option value="Kong hu chu">Kong Hu Chu</option>
									</select>
								</div>
								<div class="form-group">
									<input type="submit" name="submit" value="Simpan" class="btn btn-success btn-block">
								</div>
							</form>
						</div>
					</div> 
				</div>
			</div>
		</div>	
<?php
	include 'footer.php';
?>
```
## warga_tambah_aksi.php
buat dalam folder admin:
```php
include './koneksi.php';
$nama = $_POST['nama'];
$ktp = $_POST['ktp'];
$jk = $_POST['jk'];
$desa = $_POST['desa'];
$dusun = $_POST['dusun'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$status = $_POST['status'];
$pendidikan = $_POST['pendidikan'];
$agama = $_POST['agama'];
mysqli_query($koneksi,"INSERT INTO warga(warga_nama,warga_ktp,warga_jk,warga_desa,warga_dusun,warga_rt,warga_rw,warga_status,warga_pendidikan,warga_agama) VALUES('$nama','$ktp','$jk','$desa','$dusun','$rt','$rw','$status','$pendidikan','$agama')");
header('location:warga.php');
```
## warga_edit.php
buat dalam folder admin:
```html
<?php 
 include 'head.php';
?>
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<div class="card mb-5">
						<div class="card-body">
							<h3>Edit Warga</h3>
							<p class="text-muted">Edit Data Warga</p>
							<hr>
							<a href="warga.php" class="btn btn-success btn-sm mb-5">Kembali</a>
							<?php 
							$id = $_GET['id'];
							$warga = mysqli_query($koneksi,"SELECT * FROM warga WHERE warga_id='$id' ");
							while($w = mysqli_fetch_array($warga)){
							?>
							<form action="warga_update.php" method="post">
								<div class="form-group">
									<label>Nama</label>
									<input type="text" name="nama" class="form-control" required="required" value="<?php echo $w['warga_nama'] ?>">
									<input type="hidden" name="id" value="<?php echo $w['warga_id'] ?>">
								</div>
								<div class="form-group">
									<label>No.KTP</label>
									<input type="number" name="ktp" class="form-control" required="required" value="<?php echo $w['warga_ktp'] ?>">
								</div>
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<select name="jk" class="form-control" required="required" >
										<option value="">- Pilih -</option>
										<option <?php if($w['warga_jk'] == 'Laki-laki' ){echo "selected='selected'";} ?> value="Laki-laki">Laki-laki</option>
										<option <?php if($w['warga_jk'] == 'Perempuan' ){echo "selected='selected'";} ?> value="Perempuan">Perempuan</option>
									</select>
								</div>
								<div class="form-group">
									<label>Desa</label>
									<select name="desa" class="form-control" required="required">
										<?php
											$desa = mysqli_query($koneksi,"SELECT * FROM  desa");
											while ($d=mysqli_fetch_array($desa)) {
										?>
										<option value="">- Pilih -</option>
										<option <?php if ($w['warga_desa'] == $d['id_desa'] ) {echo "selected='selected' ";} ?> value="<?php echo $d['id_desa']; ?>"><?php echo $d['nama_desa']; ?></option>
										<?php } ?>
										
									</select>
								</div>
								<div class="form-group">
									<label>Dusun</label>
									<select name="dusun" class="form-control" required="required">
										<option value="">- Pilih -</option>
										<?php
											$dusun = mysqli_query($koneksi,"SELECT * FROM  dusun");
											while ($d=mysqli_fetch_array($dusun)) {
										?>
										<option <?php if ($w['warga_dusun'] == $d['id_dusun'] ) {echo "selected='selected' ";} ?>value="<?php echo $d['id_dusun']; ?>"><?php echo $d['nama_dusun']; ?></option>
										<?php } ?>
										
									</select>
								</div>
								<div class="form-group">
									<label>RT</label>
									<input type="text" name="rt" class="form-control" required="required" value="<?php echo $w['warga_rt'] ?>" >
								</div>
								<div class="form-group">
									<label>RW</label>
									<input type="text" name="rw" class="form-control" required="required" value="<?php echo $w['warga_rw'] ?>">
								</div>
								<div class="form-group">
									<label>Status</label>
									<select name="status" class="form-control" required="required">
										<option value=""> - Pilih -</option>
										<option <?php if($w['warga_status']=='Kawin'){echo "selected='selected'";} ?> value="Kawin">Kawin</option>
										<option <?php if($w['warga_status']=='Belum Kawin'){echo "selected='selected'";} ?>value="Belum Kawin">Belum Kawin</option>
									</select>
								</div>
								<div class="form-group">
									<label>Pendidikan</label>
									<select name="pendidikan" class="form-control" required="required">
										<option  value=""> - Pilih -</option>
										<option <?php if($w['warga_pendidikan'] == 'SD' ){echo "selected='selected'";} ?> value="SD">SD</option>
										<option <?php if($w['warga_pendidikan'] == 'SMP' ){echo "selected='selected'";} ?> value="SMP">SMP</option>
										<option <?php if($w['warga_pendidikan'] == 'SMA' ){echo "selected='selected'";} ?> value="SMA">SMA</option>
										<option <?php if($w['warga_pendidikan'] == 'S' ){echo "selected='selected'";} ?> value="S">S</option>
										<option <?php if($w['warga_pendidikan'] == 'S2' ){echo "selected='selected'";} ?> value="S2">S2</option>
										<option <?php if($w['warga_pendidikan'] == 'S3' ){echo "selected='selected'";} ?> value="S3">S3</option>
									</select>
								</div>
								<div class="form-group">
									<label>Agama</label>
									<select name="agama" class="form-control" required="required">
										<option value=""> - Pilih -</option>
										<option <?php if($w['warga_agama']== 'Islam'){echo "selected='selected'";} ?> value="Islam">Islam</option>
										<option <?php if($w['warga_agama']== 'Kristen'){echo "selected='selected'";} ?> value="Kristen">Kristen</option>
										<option <?php if($w['warga_agama']== 'Hindu'){echo "selected='selected'";} ?> value="Hindu">Hindu </option>
										<option <?php if($w['warga_agama'] == 'Buddha'){echo "selected='selected'";} ?> value="Buddha">Buddha</option>
										<option <?php if($w['warga_agama'] == 'Kong Hu Chu'){echo "selected='selected'";} ?> value="Kong hu chu">Kong Hu Chu</option>
									</select>
								</div>
								<div class="form-group">
									<input type="submit" name="submit" value="Simpan" class="btn btn-success btn-block">
								</div>
							</form>
						<?php } ?>
						</div>
					</div> 
				</div>
			</div>
		</div>	
<?php 
	include 'footer.php';
?>
```
## warga_update.php
buat dalam folder admin:
```php
include './koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$ktp = $_POST['ktp'];
$jk = $_POST['jk']; 
$desa = $_POST['desa'];
$dusun = $_POST['dusun'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$status = $_POST['status'];
$pendidikan = $_POST['pendidikan'];
$agama = $_POST['agama'];

mysqli_query($koneksi,"UPDATE warga SET warga_nama='$nama', warga_ktp='$ktp', warga_jk='$jk', warga_desa='$desa', warga_dusun='$dusun', warga_rt='$rt', warga_rw='$rw', warga_status='$status', warga_pendidikan='$pendidikan', warga_agama='$agama' WHERE warga_id='$id' ");
header('location:warga.php');
```
## warga_hapus.php
buat dalam folder admin:
```php
include './koneksi.php';
//dapat dari url desa.php
$id = $_GET['id'];//get mengambil nilai dari url//mengambilnya di desa_edit.php
mysqli_query($koneksi,"DELETE FROM warga WHERE warga_id='$id'");
header('location:warga.php');
```

## warga_cetak.php
buat dalam folder admin:
```html
<?php include './head.php'; ?>
					<h3 class="display-6 text-center mb-4 mt-4">Cetak Data Warga</h3>

					<table class="table table-bordered table-striped table-hover table-saya">
						<thead><!--kalo menggunakan data table jquery dan css wajib menggunakan thead dan tbody dan kasih class/id bebas seperti table-saya -->
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>No.KTP</th>
									<th>JK</th>
									<th>Desa</th>
									<th>Dusun</th>
									<th>RT</th>
									<th>RW</th>
									<th>Status</th>
									<th>Pendidikan</th>
									<th>Agama</th>
								</tr>
						</thead>
					
						<tbody>		
											<?php
											$no =1; 
											$warga = mysqli_query($koneksi,"SELECT * FROM warga,desa,dusun WHERE warga_desa=id_desa AND warga_dusun=id_dusun ORDER BY warga_id ASC");
											while ($w = mysqli_fetch_array($warga)) {
												
											?>
											<tr>
												<td ><?php echo $no++ ?></td>
												<td><?php echo $w['warga_nama']?></td>
												<td><?php echo $w['warga_ktp']?></td>
												<td><?php echo $w['warga_jk']?></td>
												<td><?php echo $w['nama_desa']?></td>
												<td><?php echo $w['nama_dusun']?></td>
												<td><?php echo $w['warga_rt']?></td>
												<td><?php echo $w['warga_rw']?></td>
												<td><?php echo $w['warga_status']?></td>
												<td><?php echo $w['warga_pendidikan']?></td>
												<td><?php echo $w['warga_agama']?></td>
											</tr>
										<?php 
												}
										 ?>
						 </tbody>
					</table>
<script type="text/javascript">
  window.print();//untuk ngefrint
</script>
<?php include './footer.php'; ?>						
```
## warga_filter.php
buat dalam folder admin:
```php
<?php 
	include 'head.php';
?>
		<!--Filter -->
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<h3>Data Warga</h3>
					<p class="text-muted">Semua Data Warga</p>
					<hr>
					<div class="row">
						<div class="col-md-5 mx-auto" >
							<div class="card bg-light">
								<div class="card-body">
									<form  method="get" action="warga_filter.php" >
										<div class="form-group">
											<label>Filter Desa</label>
											<select name="desa" class="form-control" required="required">
												<option value="">- Pilih -</option>
												<?php
													//desa sama dengan menampilkan semua data dari desa1
													$id_desa= $_GET['desa'];
													$desa = mysqli_query($koneksi,"SELECT * FROM  desa");
													while ($d=mysqli_fetch_array($desa)) {
												?>
												<!--semua data dari desa1 yg nilainnya id_desa1  ada beberapa desa-->
												<!--kemudian yg dipinta tampilkan nama_desa1 --> 
												<option <?php if($d['id_desa']==$id_desa){ echo "selected='selected'";} ?> value="<?php echo $d['id_desa']; ?>"><?php echo $d['nama_desa']; ?></option>
												<?php } ?>
							
											</select>
										</div>
										<input type="submit" name="submit" value="Tampilkan Data" class="btn btn-success btn-dark">
									</form>
								</div>
							</div>
						</div>
					</div>

					<a href="warga_tambah.php" class="btn btn-success btn-sm mb-5">Tambah Warga</a>
					<a href="warga_cetak_filter.php?id=<?php echo $id_desa; ?>" class="btn btn-primary btn-sm mb-5 float-right" target="_blank">Cetak</a>
					<!--float-right agar button beara disamping kanan -->

					<table class="table table-bordered table-striped table-hover table-saya">
						<thead><!--kalo menggunakan data table jquery dan css wajib menggunakan thead dan tbody dan kasih class/id bebas seperti table-saya -->
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>No.KTP</th>
									<th>JK</th>
									<th>Desa</th>
									<th>Dusun</th>
									<th>RT</th>
									<th>RW</th>
									<th>Status</th>
									<th>Pendidikan</th>
									<th>Agama</th>
									<th width="11%">Opsi</th>
								</tr>

						</thead>
											<!--Menampilkan Data  Relasi -->
											<tbody>
												
											<?php
											$no =1;
											$desa = $_GET['desa']; 
											$warga = mysqli_query($koneksi,"SELECT * FROM warga,desa,dusun WHERE warga_desa=id_desa AND warga_dusun=id_dusun AND warga_desa='$desa' ORDER BY warga_id ASC");
											while ($w = mysqli_fetch_array($warga)) {
												
											?>
											<tr>
												<td ><?php echo $no++ ?></td>
												<td><?php echo $w['warga_nama']?></td>
												<td><?php echo $w['warga_ktp']?></td>
												<td><?php echo $w['warga_jk']?></td>
												<td><?php echo $w['nama_desa']?></td>
												<td><?php echo $w['nama_dusun']?></td>
												<td><?php echo $w['warga_rt']?></td>
												<td><?php echo $w['warga_rw']?></td>
												<td><?php echo $w['warga_status']?></td>
												<td><?php echo $w['warga_pendidikan']?></td>
												<td><?php echo $w['warga_agama']?></td>
												<td>
													<a href="warga_edit.php?id=<?php echo $w['warga_id'] ?>" class="btn btn-warning btn-sm text-white">Edit</a>
													<a href="warga_Hapus.php?id=<?php echo $w['warga_id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
												</td>
											</tr>
										<?php 
												}
										 ?>
										 </tbody>
										</table>
									</div>
								</div> 
							</div>	
<?php 
	include 'footer.php';
?>
```

## warga_filter_cetak.php
buat dalam folder admin:
```html
<?php include './head.php'; ?>
					<h3 class="display-6 text-center mb-4 mt-4">Cetak Data Warga</h3>

					<table class="table table-bordered table-striped table-hover table-saya">
						<thead><!--kalo menggunakan data table jquery dan css wajib menggunakan thead dan tbody dan kasih class/id bebas seperti table-saya -->
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>No.KTP</th>
									<th>JK</th>
									<th>Desa</th>
									<th>Dusun</th>
									<th>RT</th>
									<th>RW</th>
									<th>Status</th>
									<th>Pendidikan</th>
									<th>Agama</th>
								</tr>
						</thead>
					
						<tbody>		
											<?php
											$no =1; 
											$desa = $_GET['id']; 
											$warga = mysqli_query($koneksi,"SELECT * FROM warga,desa,dusun WHERE warga_desa=id_desa AND warga_dusun=id_dusun AND warga_desa='$desa' ORDER BY warga_id ASC");
											while ($w = mysqli_fetch_array($warga)) {
												
											?>
											<tr>
												<td ><?php echo $no++ ?></td>
												<td><?php echo $w['warga_nama']?></td>
												<td><?php echo $w['warga_ktp']?></td>
												<td><?php echo $w['warga_jk']?></td>
												<td><?php echo $w['nama_desa']?></td>
												<td><?php echo $w['nama_dusun']?></td>
												<td><?php echo $w['warga_rt']?></td>
												<td><?php echo $w['warga_rw']?></td>
												<td><?php echo $w['warga_status']?></td>
												<td><?php echo $w['warga_pendidikan']?></td>
												<td><?php echo $w['warga_agama']?></td>
											</tr>
										<?php 
												}
										 ?>
						 </tbody>
					</table>
<script type="text/javascript">
  window.print();//untuk ngefrint
</script>

<?php include './footer.php'; ?>
```


## home.php
ubah source code:
```html
		<div class="row">

						<div class="col-md-4">
							<div class="card bg-danger text-white">
								<div class="card-body ">

									<div class="row">
										<div class="col-md-4">
											<i class="fa fa-users fa-4x"> </i>
										</div>
										<div class="col-md-8">
											<h4>Data Warga</h4>
											<?php 
											$warga = mysqli_query($koneksi,"SELECT * FROM warga");
											$jumlah_warga = mysqli_num_rows($warga);
											?>
											<p><?php echo  $jumlah_warga; ?></p>
										</div>
									</div>

								</div>
							</div>
						</div>


						<div class="col-md-4">
							<div class="card bg-warning text-white">
								<div class="card-body ">

									<div class="row">
										<div class="col-md-4">
											<i class="fa fa-briefcase fa-4x"> </i>
										</div>
										<div class="col-md-8">
											<h4>Data Desa</h4>
											<?php 
											$desa = mysqli_query($koneksi,"SELECT * FROM desa");
											$jumlah_desa = mysqli_num_rows($desa);
											?>
											<p><?php echo  $jumlah_desa; ?></p>
										</div>
									</div>

								</div>
							</div>
						</div>


						<div class="col-md-4">
							<div class="card bg-success text-white">
								<div class="card-body">

									<div class="row">
										<div class="col-md-4">
											<i class="fa fa-briefcase fa-4x"> </i>
										</div>
										<div class="col-md-8">
											<h4>Data Dusun</h4>
											<?php 
											$dusun = mysqli_query($koneksi,"SELECT * FROM dusun");
											$jumlah_dusun = mysqli_num_rows($dusun);
											?>
											<p><?php echo  $jumlah_dusun; ?></p>
										</div>
									</div>

								</div>
							</div>
						</div>


						<div class="col-md-12">
							<br/>
							<br/>
							<center>
								<h3 class="display-4">Grafik Warga</h3>
								<p class="text-muted">Jumlah Warga Berdasarkan Desa</p>
							</center>
							<br/>
							<div style="width: 100%; height: 700px;">
								<canvas id="xxx"></canvas>
							</div>
							
						</div>



					</div>
```

## head.php
tambah source code:
```js
	<script type="text/javascript" src="./../modal/chart/Chart.js"></script>
```

## footer.php
tambah source code:
```js
	var ctx = document.getElementById("xxx").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: [

				<?php
				$desa = mysqli_query($koneksi, "SELECT * FROM desa");
				while($d=mysqli_fetch_array($desa)){
				?>
				"<?php echo $d['nama_desa']; ?>", 
				<?php
				}
				?>

				],
				datasets: [{
					label: 'Jumlah Warga',
					data: [

					<?php
					$desa = mysqli_query($koneksi, "SELECT * FROM desa");
					while($d=mysqli_fetch_array($desa)){
						$id_desa = $d['id_desa'];
						$w = mysqli_query($koneksi,"SELECT * FROM warga WHERE warga_desa='$id_desa'");
						$ww = mysqli_num_rows($w);
						?>
						"<?php echo $ww; ?>", 
						<?php
					}
					?>

					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
```

## ganti_password.php
buat di folder admin:
```php
<?php 
	INCLUDE 'head.php';
?>


		<div class="container">
			<div class="row">
				<div class="col-md-6 mx-auto">
					<div class="card">
						<div class="card-body">
							<h3>Ganti Password</h3>
							<p class="text-muted">Ganti Password Admin</p>
							<hr>
							<?php 
							if(isset($_GET['pesan'])){
								if($_GET['pesan']=='pasten'){
									echo "<div class='alert alert-success'>Password Telah Di Ganti</div>";
								}
							}

							?>

						
							<form action="ganti_password_aksi.php" method="post">
								<div class="form-group">
									<label>Masukan Password Baru</label>
									<input type="Password" name="Password" required="required" class="form-control mb-2">
									<!--from control untuk memenuhi kotak input -->
									<input type="submit" name="submit" value="simpan" class="btn btn-success btn-block">
									<!--btn-block untuk memenuhi kotal submit -->
								</div>
							</form>
						</div>
					</div> 
				</div>
			</div>
		</div>	


<?php 
	INCLUDE 'footer.php';
?>
```

## ganti_password_aksi.php
buat di folder admin:
```php
INCLUDE './koneksi.php';
$pass = md5($_POST['Password']);
mysqli_query($koneksi,"UPDATE `admin` SET `password`='$pass' ");
header("location:ganti_password.php?pesan=pasten");
```
