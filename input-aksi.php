<?php 
include 'koneksi.php';
$nama 	    = $_POST['nama'];
$keterangan = $_POST['keterangan'];
$gambar     = $_POST['gambar'];
$path = "img/".$gambar;
 
$query="INSERT INTO tabel_penyakit SET Nama='$nama', Keterangan='$keterangan', Gambar='path'";
mysqli_query($connection, $query);

header("location:admin_penyakit.php?pesan=input");
?>