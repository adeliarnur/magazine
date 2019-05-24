<?php
include "includes/db_connection.php";
$id = $_GET['id'];


$tanggal = $_POST['tanggal'];
echo $tanggal;
$status = $_POST['status'];


$keterangan = $_POST['keterangan'];

$posko = $_POST['id_lokasi'];
$lokasi = $_POST['lokasi'] or die("Gagal mengecek lokasi di database");



$sql = "UPDATE status_bencana
        SET lokasi_bencana='".$lokasi."', tanggal_bencana='".$tanggal."', status_bencana='".$status."', keterangan_bencana='".$keterangan."', id_lokasi='".$posko."'
        WHERE id_status_bencana= '".$id."'";



$stmt = $db->prepare($sql) or die("Gagal mengecek user di database");
// $stmt->bind_param("ssis", $lokasi, $tanggal, $status, $keterangan, $makanan);

if ($stmt->execute() === FALSE) {
  echo "Error: " . $sql . "<br>" . $db->error;
  die();
  }


header("location:AdminStatusBencana.php?pesan=edit");
?>
