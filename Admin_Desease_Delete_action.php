<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($connection,"DELETE FROM desease WHERE id='$id'")or die(mysql_error());
 
header("location:admin_penyakit.php?pesan=delete");
?>