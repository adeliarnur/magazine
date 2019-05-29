<?php
session_start();
require('konek.php');
$mysqli = new mysqli('localhost','root','','psi') or die(mysql_error($mysqli));


$lokasi = $_POST['lokasi'] or die("Gagal mengecek lokasi di database");

$tanggal = $_POST['tanggal'];

$status = $_POST['status'];


$keterangan = $_POST['keterangan'];

$posko = $_POST['id_lokasi'];


$sql = "INSERT INTO status_bencana (lokasi_bencana, tanggal_bencana, status_bencana, keterangan_bencana, id_lokasi)
    VALUES ('".$lokasi."', '".$tanggal."', '".$status."', '".$keterangan."','".$posko."')";
    $stmt = $con->prepare($sql);
$tambahdata = mysqli_query($con,$sql);

  if(!$tambahdata ){
  echo "<script>alert('Gagal di tambahkan!');history.go(-1);</script>";
  } else{
    echo "<script>alert('Data berhasil di tambahkan!');window.location='AdminStatusBencana.php'</script>";
        }



?>
