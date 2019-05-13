<?php 
 
include 'koneksi.php';
$id 		= $_POST['id'];
$judul 	    = $_POST['judul'];
$keterangan = $_POST['keterangan'];
$gambar     = $_POST['gambar'];
$path 		= "img/".$gambar;
$query="UPDATE desease SET judul_penyakit='$judul', deskr='$keterangan', dir_img_penyakit='$path' WHERE id='$id'";
mysqli_query($connection,$query)or die(mysql_error());
//echo "$query";
Header("location:admin_penyakit.php?pesan=update");
 
?>