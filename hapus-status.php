<?php
require('konek.php');

$id = $_GET['id'];

$hapusdata=mysqli_query($con,"DELETE FROM status_bencana WHERE id_status_bencana='$id'");

if(!$hapusdata ){
echo "<script>alert('Gagal di hapus!');history.go(-1);</script>";
} else{
  echo "<script>alert('Data berhasil di hapus!');window.location='AdminStatusBencana.php'</script>";
      }

?>
