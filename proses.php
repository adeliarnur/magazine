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

/////////////////////////////////////////////////////////////////////// create data orang
if (isset($_POST['save'])){
	$nama = $_POST['nama'];
	$status = $_POST['stat'];
	$nilai = $_POST['nilai'];
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
		$query = "INSERT INTO dataorang (status, nilai, Nama, NamaAyah, NamaIbu, Gender, Usia, TempatLahir, AlamatAkhir, Kewarganegaraan, Deskripsi) VALUES('$status',$nilai , '$nama', '$ayah', '$ibu', '$jk', '$usia', '$kota', '$alamat', '$negara', '$deskrip')";
		$result = mysqli_query($mysqli, $query) OR die(mysqli_error($mysqli));

	}
	
	echo "<script>alert('Data Berhasil Ditambahkan'); </script>";
 	echo "<script>window.location='AdminPilihanOrangHilang.php';</script>";

}




////////////////////////////////////////////////////////////////////////Update data orang
if (isset($_POST['update'])){
	$id = $_POST['id'];

	$nama = $_POST['nama'];
	$status = $_POST['stat'];
	$nilai = $_POST['nilai'];
	$ayah = $_POST['namaayah'];
	$ibu = $_POST['namaibu'];
	$jk = $_POST['gender'];
	$usia = $_POST['usia'];
	$kota = $_POST['kota'];
	$alamat = $_POST['alamat'];
	$negara = $_POST['negara'];
	$deskrip = $_POST['deskripsi'];

	$mysqli->query("UPDATE dataorang SET status = '$status', nilai = '$nilai', Nama = '$nama', NamaAyah = '$ayah', NamaIbu = '$ibu', Gender = '$jk', Usia = '$usia', TempatLahir = '$kota', AlamatAkhir = '$alamat', Kewarganegaraan = '$negara', Deskripsi = '$deskrip' WHERE ID_Orang ='$id'") or die($mysqli->error);

	$_SESSION['message'] = "Data Disimpan!";
	$_SESSION['msg_type'] = "Sukses";	
	echo "<script>alert('Data Berhasil Diupdate'); </script>";
 	echo "<script>window.location='AdminPilihanOrangHilang.php';</script>";
}

//////////////////////////////////////////////////////////////////////Delete data orang

if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM dataorang WHERE ID_Orang=$id") or die($mysqli->error());

	$_SESSION['message'] = "Data Dihapus!";
	$_SESSION['msg_type'] = "bahaya";

	echo "<script>alert('Data Berhasil Dihapus'); </script>";
 	echo "<script>window.location='AdminPilihanOrangHilang.php';</script>";

}
////////////////////////////////////////////////////////////////////Read data orang ketika update di form
if (isset($_POST['edit'])){
	$id = $_GET['edit'];
	$result = $mysqli->query("SELECT * FROM dataorang WHERE ID_Orang=$id") or die($mysqli->error());
	if (count($result)==1){
		$row = $result->fetch_array();
		$nama = $row['Nama'];
		$status = $_row['status'];
		$nilai = $_row['nilai'];
		$ayah = $_row['NamaAyah'];
		$ibu = $_row['NamaIbu'];
		$jk = $_row['Gender'];
		$usia = $_row['Usia'];
		$kota = $_row['TempatLahir'];
		$alamat = $_row['AlamatAkhir'];
		$negara = $_row['Kewarganegaraan'];
		$deskrip = $_row['Deskripsi'];

	}

}



?>