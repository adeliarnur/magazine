<?php 
include 'koneksi.php';
$judul	    = $_POST['judul'];
$keterangan = $_POST['keterangan'];
$gambar     = $_POST['gambar'];
$path = "img/".$gambar;
 
$query="INSERT INTO desease SET judul_penyakit='$judul', deskr='$keterangan', dir_img_penyakit='$path'";
mysqli_query($connection, $query);

header("location:admin_penyakit.php?pesan=input");
?>