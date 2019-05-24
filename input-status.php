<?php
include "includes/db_connection.php";
$lokasi = $_POST['lokasi'] or die("Gagal mengecek lokasi di database");

$tanggal = $_POST['tanggal'];

$status = $_POST['status'];


$keterangan = $_POST['keterangan'];

$posko = $_POST['id_lokasi'];


$sql = "INSERT INTO status_bencana (lokasi_bencana, tanggal_bencana, status_bencana, keterangan_bencana, id_lokasi)
    VALUES ('".$lokasi."', '".$tanggal."', '".$status."', '".$keterangan."','".$posko."')";


$stmt = $db->prepare($sql) or die("Gagal input status bencana di database");
// $stmt->bind_param("ssis", $lokasi, $tanggal, $status, $keterangan, $makanan);

if ($stmt->execute() === FALSE) {
  echo "Error: " . $sql . "<br>" . $db->error;
  die();
  }


header("location:AdminStatusBencana.php?pesan=input");
?>
