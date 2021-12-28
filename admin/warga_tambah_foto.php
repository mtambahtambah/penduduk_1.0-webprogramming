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