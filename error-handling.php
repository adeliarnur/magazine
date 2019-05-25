<?php
session_start();
$mysqli = new mysqli('localhost','root','','psi') or die(mysql_error($mysqli));
$lokasi = '';
$tanggal = '';
$status = '';
$keterangan = '';
$makanan = '';
/////////////////////////////////////////////////////////////////////// create status bencana
if (isset($_POST['save'])){
	$lokasi = $_POST ['lokasi']
	$tanggal = $_POST['tanggal'];
	$status = $_POST['status'];
	$keterangan = $_POST['keterangan'];
	$makanan = $_POST['id_makanan'];
	$sql_a = "SELECT * FROM status_bencana WHERE lokasi_bencana= '$lokasi' AND tanggal_bencana='$tanggal' AND status_bencana='$status' AND keterangan_bencana='$keterangan' AND id_makanan='$makanan' ";
	$res_a = mysqli_query($mysqli, $sql_a) or die(mysqli_error($mysqli));
	if(mysqli_num_rows($res_a) > 0){
		echo "<script>alert('Data Pernah Ditambahkan'); </script>";
 		echo "<script>window.location='input-status.php';</script>";
	}else
	{
		$query = "INSERT INTO status_bencana (lokasi_bencana, tanggal_bencana , status_bencana , keterangan_bencana , id_makanan ) VALUES('$lokasi','$tanggal','$status','$keterangan', '$makanan' ";
		$result = mysqli_query($mysqli, $query) OR die(mysqli_error($mysqli));
		echo "<script>alert('Data Berhasil Ditambahkan'); </script>";
 		echo "<script>window.location='input-status.php';</script>";
	}
	
	
}
////////////////////////////////////////////////////////////////////////Update status bencana
if (isset($_POST['update'])){
	$id = $_POST['id_status_bencana'];
	$lokasi = $_POST['lokasi']
	$tanggal = $_POST['tanggal'];
	$status = $_POST['status'];
	$keterangan = $_POST['keterangan'];
	$makanan = $_POST['id_makanan'];
	$mysqli->query("UPDATE status_bencana SET lokasi_bencana = '$lokasi' , tanggal_bencana = '$tanggal', status_bencana = '$status', keterangan_bencana = '$keterangan', id_makanan = '$makanan' WHERE id_status_bencana ='$id'") or die($mysqli->error);
	echo "<script>alert('Data Berhasil Diupdate'); </script>";
 	echo "<script>window.location='input-status.php';</script>";
}
//////////////////////////////////////////////////////////////////////Delete data status-bencana
if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM status_bencana WHERE id_status_bencana= $id") or die($mysqli->error());
	echo "<script>alert('Data Berhasil Dihapus'); </script>";
 	echo "<script>window.location='input-status.php';</script>";
}
?>