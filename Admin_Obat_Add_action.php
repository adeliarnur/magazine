<?php 
include 'koneksi.php';
$judul	    = $_POST['judul'];
$keterangan = $_POST['keterangan'];
$gambar     = $_POST['gambar'];

	$nama_file = $_FILES['gambar']['name'];
	$ukuran_file = $_FILES['gambar']['size'];
	$tipe_file = $_FILES['gambar']['type'];
	$tmp_file = $_FILES['gambar']['tmp_name'];


$path = "img/OB/".$nama_file;

move_uploaded_file($tmp_file, $path);

 
$query="INSERT INTO drug SET judul_obat='$judul', deskr='$keterangan', dir_img_obat='$path'";
mysqli_query($connection, $query);

header("location:admin_obat.php?pesan=input");
?>