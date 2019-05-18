<?php

session_start();


$mysqli = new mysqli('localhost','root','','psi') or die(mysql_error($mysqli));

$nama = '';
$status = '';
$ayah = '';
$ibu = '';
$jk = '';
$usia = '';
$kota = '';
$alamat = '';
$negara = '';
$deskrip = '';

if(isset($_GET['accept'])){
	$id = $_GET['accept'];
	$mysqli->query("UPDATE dataorang SET nilai = '1' WHERE ID_Orang=$id") or die($mysqli->error());

	$_SESSION['message'] = "Data Diterima!";
	$_SESSION['msg_type'] = "accept";

	echo "<script>alert('Data Telah Diterima!'); </script>";
 	 echo "<script>window.location='AdminLaporan.php';</script>";
}

if(isset($_GET['reject'])){
	$id = $_GET['reject'];
	$mysqli->query("UPDATE dataorang SET nilai = '2' WHERE ID_Orang=$id") or die($mysqli->error());

	$_SESSION['message'] = "Data Ditolak!";
	$_SESSION['msg_type'] = "reject";

	echo "<script>alert('Data Telah Ditolak!'); </script>";
 	 echo "<script>window.location='AdminLaporan.php';</script>";
}

if (isset($_POST['save_user'])){
	$nama = $_POST['nama'];
	$status = $_POST['stat'];
	$ayah = $_POST['namaayah'];
	$ibu = $_POST['namaibu'];
	$jk = $_POST['gender'];
	$usia = $_POST['usia'];
	$kota = $_POST['kota'];
	$alamat = $_POST['alamat'];
	$negara = $_POST['negara'];
	$deskrip = $_POST['deskripsi'];


	$sql_a = "SELECT * FROM dataorang WHERE Nama='$nama' AND NamaAyah='$ayah' AND NamaIbu='$ibu' AND Gender='$jk' AND Usia='$usia' AND TempatLahir='$kota' AND AlamatAkhir='$alamat' AND Kewarganegaraan='$negara' ";
	$res_a = mysqli_query($mysqli, $sql_a) or die(mysqli_error($mysqli));

	if(mysqli_num_rows($res_a) > 0){
		$name_error = "data pernah dipakai";
	}else
	{
		$query = "INSERT INTO dataorang (status, nilai, Nama, NamaAyah, NamaIbu, Gender, Usia, TempatLahir, AlamatAkhir, Kewarganegaraan, Deskripsi) VALUES('$status', '0', '$nama', '$ayah', '$ibu', '$jk', '$usia', '$kota', '$alamat', '$negara', '$deskrip')";
		$result = mysqli_query($mysqli, $query) OR die(mysqli_error($mysqli));

	}


	// $mysqli->query("INSERT INTO dataorang (Status, Nama, NamaAyah, NamaIbu, Gender, Usia, TempatLahir, AlamatAkhir, Kewarganegaraan, Deskripsi) VALUES('$status', '$nama', '$ayah', '$ibu', '$jk', '$usia', '$kota', '$alamat', '$negara', '$deskrip')") or die($mysqli->error);

	// $_SESSION['message'] = "Data Disimpan!";
	// $_SESSION['msg_type'] = "Sukses";

	echo "<script>alert('Data Berhasil Ditambahkan'); </script>";
 echo "<script>window.location='TambahOrangHilang.php';</script>";
}



?>