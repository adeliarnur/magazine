<?php 
 
include 'koneksi.php';
$id 		= $_POST['id'];
$nama 	    = $_POST['nama1'];
$keterangan = $_POST['keterangan1'];
$gambar     = $_POST['gambar1'];
$path 		= "img/".$gambar;
$query="UPDATE tabel_penyakit SET Nama='$nama', Keterangan='$keterangan', Gambar='$path' WHERE id='$id'";
mysqli_query($connection,$query)or die(mysql_error());
echo "$query";
//Header("location:admin_penyakit.php?pesan=update");
 
?>