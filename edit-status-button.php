<?php
require('konek.php');
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
$stmt = $con->prepare($sql);

$editdata = mysqli_query($con,$sql);

  if(!$editdata ){
  echo "<script>alert('Gagal diedit!');history.go(-1);</script>";
  } else{
    echo "<script>alert('Data berhasil diedit!');window.location='AdminStatusBencana.php'</script>";
        }
?>
