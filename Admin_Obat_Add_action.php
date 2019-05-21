<?php 
include 'koneksi.php';
$judul	    = $_POST['judul'];
$keterangan = $_POST['keterangan'];
$gambar     = $_POST['gambar'];
$path = "img/PY/".$gambar;
 
$query="INSERT INTO drug SET judul_obat='$judul', deskr='$keterangan', dir_img_obat='$path'";
mysqli_query($connection, $query);

header("location:admin_obat.php?pesan=input");
?>