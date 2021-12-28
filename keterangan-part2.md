# penduduk v1.0
gasken bosque yo.

## table warga (mysql)
masukan code:
```sql
ALTER TABLE `warga` ADD `foto` VARCHAR(100) NOT NULL AFTER `warga_agama1`;
```

## warga_tambah.php
tambahkan source code:
```html
<form enctype="multipart/form-data">
```
dan 
```html
<label for="fileToUpload">Foto</label>
<input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
<div class="form-group">
	<input type="submit" name="submit" value="Simpan" class="btn btn-success btn-block">
</div>
```

`Configure The "php.ini" File`
```
file_uploads = On
```

## warga_tambah_foto.php
buat file dalam folder admin
```php
<?php
$target_dir = "./../uploads/";
$namaFile =end(explode('.', $_FILES["fileToUpload"]["name"]));
$ubahNamae= date("YmdHis").".".$namaFile;
$target_file = $target_dir . $ubahNamae;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Periksa apakah file gambar adalah gambar asli atau gambar palsu
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Periksa apakah file sudah ada
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Periksa ukuran file
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Izinkan format file tertentu
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Periksa apakah $uploadOk disetel ke 0 karena kesalahan
if ($uploadOk == 0) {
  echo "Maaf, file Anda tidak diunggah.";
//jika semuanya baik-baik saja, coba unggah file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Berkas ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has telah diunggah.";
  } else {
    echo "Maaf, terjadi kesalahan saat mengunggah file Anda.";
  }
}
?>
```
 ## warga_tambah_aksi.php
 tambahkan source code:
 ```php
 include "./warga_tambah_foto.php";
 ```

 ## warga.php
 tambahkan source code:
```html
<th>Foto</th>
```
 dan
 ```html
<td>
 <img src="./../upload/<?php echo $w['foto']?>" width="40" height="40" alt="gambar">
</td>
 ```

## warga_edit.php
ubah
```html
	<form action="warga_update.php" method="post" enctype="multipart/form-data">
```
dan tambahkan
```html
<label for="fileToUpload">Foto (kosongkan: jika tida ingin di edit)</label>
<input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
<input type="hidden" class="form-control" name="fileToUpload_yg_lama" value="<?= $w['foto'];?>">
```

## warga_edit_foto.php
buat file dalam folder admin
```php
<?php
if(empty($_FILES["fileToUpload"]["name"])){
    $ubahNamae = $_POST['fileToUpload_yg_lama'];
}else {
$target_dir = "./../uploads/";
$namaFile =end(explode('.', $_FILES["fileToUpload"]["name"]));
$ubahNamae= date("Ymd").".".$namaFile;
$target_file = $target_dir . $ubahNamae;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Periksa apakah file gambar adalah gambar asli atau gambar palsu
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Periksa apakah file sudah ada
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Periksa ukuran file
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Izinkan format file tertentu
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Periksa apakah $uploadOk disetel ke 0 karena kesalahan
if ($uploadOk == 0) {
  echo "Maaf, file Anda tidak diunggah.";
//jika semuanya baik-baik saja, coba unggah file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Berkas ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has telah diunggah.";
  } else {
    echo "Maaf, terjadi kesalahan saat mengunggah file Anda.";
  }
}
}
?>
```

## warga_update.php
tambahkan source code:
```php
include './warga_edit_foto.php';
```