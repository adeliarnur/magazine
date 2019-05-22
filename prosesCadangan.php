<?php

session_start();


$mysqli = new mysqli('localhost','root','','psi') or die(mysql_error($mysqli));


///////////////////////////////////////////////////////////////////////// create data orang
if (isset($_POST['save'])){

	$id_lokasi = $_POST['id_lokasi'];
	$namaMakanan = $_POST['nama_makanan'];
	$penanggung_jawab = $_POST['penanggung_jawab'];
	$kelebihan = $_POST['kelebihan'];
	$kekurangan = $_POST['kekurangan'];

	$sql_a = "SELECT * FROM makanan WHERE id_lokasi='$id_lokasi' AND nama_makanan='$namaMakanan' AND penanggung_jawab='$penanggung_jawab' AND kelebihan='$kelebihan' AND kekurangan='$kekurangan' ";
	$res_a = mysqli_query($mysqli, $sql_a) or die(mysqli_error($mysqli));

	if(mysqli_num_rows($res_a) > 0){
		$name_error = "data pernah dipakai";
	}else
	{
		$query = "INSERT INTO makanan (id_lokasi, nama_makanan, penanggung_jawab, kelebihan, kekurangan) VALUES('$id_lokasi', '$namaMakanan', '$penanggung_jawab', '$kelebihan', '$kekurangan')";
		$result = mysqli_query($mysqli, $query) OR die(mysqli_error($mysqli));
		echo "<script>alert('Data Berhasil Ditambahkan'); </script>";
		echo "<script>window.location='AdminCadangan.php';</script>";

	}


	// $mysqli->query("INSERT INTO kontak (nama_kontak, no_kontak, lembaga, cluster, nama_kota) VALUES('$nama', '$nomor', '$lembaga', '$cluster', '$kota')") or die($mysqli->error);

	// $_SESSION['message'] = "Data Disimpan!";
	// $_SESSION['msg_type'] = "Sukses";

	// header("location: AdminCadangan.php");
}
////////////////////////////////////////////////////////////////////////Update data orang
if (isset($_POST['update'])){
	$id = $_POST['id'];

	$id_lokasi = $_POST['id_lokasi'];
	$namaMakanan = $_POST['nama_makanan'];
	$penanggung_jawab = $_POST['penanggung_jawab'];
	$kelebihan = $_POST['kelebihan'];
	$kekurangan = $_POST['kekurangan'];

	$mysqli->query("UPDATE makanan SET id_lokasi = '$id_lokasi', nama_makanan = '$namaMakanan', penanggung_jawab = '$penanggung_jawab', kelebihan = '$kelebihan', kekurangan = '$kekurangan' WHERE id_makanan ='$id'") or die($mysqli->error);

	$_SESSION['message'] = "Data Disimpan!";
	$_SESSION['msg_type'] = "Sukses";
	echo "<script>alert('Update Data Berhasil'); </script>";
	echo "<script>window.location='AdminCadangan.php';</script>";
	// header("location: AdminCadangan.php");
}

//////////////////////////////////////////////////////////////////////Delete data orang

if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM makanan WHERE id_makanan=$id") or die($mysqli->error());

	$_SESSION['message'] = "Data Dihapus!";
	$_SESSION['msg_type'] = "bahaya";

	echo "<script>alert('Delete Data Berhasil'); </script>";
	echo "<script>window.location='AdminCadangan.php';</script>";
	// header("location: AdminCadangan.php");

}





////////////////////////////////////////////////////////////////////Read data orang ketika update di form
if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$result = $mysqli->query("SELECT * FROM makanan WHERE id_makanan=$id") or die($mysqli->error());
	if (count($result)==1){
		$row = $result->fetch_array();
		$lokasi = $_row['id_lokasi'];
		$namaMakanan = $_row['nama_makanan'];
		$penanggung_jawab = $_row['penanggung_jawab'];
		$kelebihan = $_row['kelebihan'];
		$kekurangan = $_row['kekurangan'];

	}

}



?>
