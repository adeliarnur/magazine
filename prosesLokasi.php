<?php

session_start();


$mysqli = new mysqli('localhost','root','','psi') or die(mysql_error($mysqli));


///////////////////////////////////////////////////////////////////////// create data orang

if (isset($_POST['save'])){

	$nama = $_POST['nama'];
	$provinsi = $_POST['provinsi'];
	$kecamatan = $_POST['kecamatan'];
	$desa = $_POST['desa'];

	$sql_a = "SELECT * FROM lokasi WHERE nama='$nama' AND provinsi='$provinsi' AND kecamatan='$kecamatan' AND desa='$desa' ";
	$res_a = mysqli_query($mysqli, $sql_a) or die(mysqli_error($mysqli));

	if(mysqli_num_rows($res_a) > 0){
		$name_error = "data pernah dipakai";
	}else
	{
		$query = "INSERT INTO lokasi (nama, provinsi, kecamatan, desa) VALUES('$nama', '$provinsi', '$kecamatan', '$desa')";
		$result = mysqli_query($mysqli, $query) OR die(mysqli_error($mysqli));
		echo "<script>alert('Data Berhasil Ditambahkan'); </script>";
		echo "<script>window.location='AdminLokasi.php';</script>";

	}
}
////////////////////////////////////////////////////////////////////////Update data orang
if (isset($_POST['update'])){
	$id = $_POST['id'];

	$nama = $_POST['nama'];
	$provinsi = $_POST['provinsi'];
	$kecamatan = $_POST['kecamatan'];
	$desa = $_POST['desa'];

	$mysqli->query("UPDATE lokasi SET nama = '$nama', provinsi = '$provinsi', kecamatan = '$kecamatan', desa = '$desa' WHERE ID_lokasi ='$id'") or die($mysqli->error);

	echo "<script>alert('Update Data Berhasil'); </script>";
	echo "<script>window.location='AdminLokasi.php';</script>";
}

//////////////////////////////////////////////////////////////////////Delete data orang

if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM lokasi WHERE ID_lokasi=$id") or die($mysqli->error());

	echo "<script>alert('Delete Data Berhasil'); </script>";
	echo "<script>window.location='AdminLokasi.php';</script>";

}



?>
