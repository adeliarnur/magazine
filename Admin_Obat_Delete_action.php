<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($connection,"DELETE FROM drug WHERE id='$id'")or die(mysql_error());
 
header("location:admin_obat.php?pesan=delete");
?>