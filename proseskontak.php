<?php

session_start();


$mysqli = new mysqli('localhost','root','','psi') or die(mysql_error($mysqli));


///////////////////////////////////////////////////////////////////////// create data orang
if (isset($_POST['save'])){

	$nama = $_POST['nama'];
	$nomor = $_POST['nomor'];
	$lembaga = $_POST['lembaga'];
	$cluster = $_POST['cluster'];
	$kota = $_POST['kota'];

	$sql_a = "SELECT * FROM kontak WHERE nama_kontak='$nama' AND no_kontak='$nomor' AND lembaga='$lembaga' AND cluster='$cluster' AND nama_kota='$kota' ";
	$res_a = mysqli_query($mysqli, $sql_a) or die(mysqli_error($mysqli));

	if(mysqli_num_rows($res_a) > 0){
		$name_error = "data pernah dipakai";
	}else
	{
		$query = "INSERT INTO kontak (nama_kontak, no_kontak, lembaga, cluster, nama_kota) VALUES('$nama', '$nomor', '$lembaga', '$cluster', '$kota')";
		$result = mysqli_query($mysqli, $query) OR die(mysqli_error($mysqli));
		exit();

	}


	// $mysqli->query("INSERT INTO kontak (nama_kontak, no_kontak, lembaga, cluster, nama_kota) VALUES('$nama', '$nomor', '$lembaga', '$cluster', '$kota')") or die($mysqli->error);

	// $_SESSION['message'] = "Data Disimpan!";
	// $_SESSION['msg_type'] = "Sukses";

	header("location: Adminkontak.php");
}
////////////////////////////////////////////////////////////////////////Update data orang
if (isset($_POST['update'])){
	$id = $_POST['id'];

	$nama = $_POST['nama'];
	$nomor = $_POST['nomor'];
	$lembaga = $_POST['lembaga'];
	$cluster = $_POST['cluster'];
	$kota = $_POST['kota'];

	$mysqli->query("UPDATE kontak SET nama_kontak = '$nama', nama_kota = '$kota', lembaga = '$lembaga', cluster = '$cluster', no_kontak = '$nomor' WHERE id_kontak ='$id'") or die($mysqli->error);

	$_SESSION['message'] = "Data Disimpan!";
	$_SESSION['msg_type'] = "Sukses";	
	header("location: Adminkontak.php");
}

//////////////////////////////////////////////////////////////////////Delete data orang

if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM kontak WHERE id_kontak=$id") or die($mysqli->error());

	$_SESSION['message'] = "Data Dihapus!";
	$_SESSION['msg_type'] = "bahaya";

	header("location: Adminkontak.php");

}
////////////////////////////////////////////////////////////////////Read data orang ketika update di form
if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$result = $mysqli->query("SELECT * FROM kontak WHERE id_kontak=$id") or die($mysqli->error());
	if (count($result)==1){
		$row = $result->fetch_array();
		$nama = $_row['nama_kontak'];
		$nomor = $_row['no_kontak'];
		$lembaga = $_row['lembaga'];
		$cluster = $_row['cluster'];
		$kota = $_row['nama_kota'];		

	}

}



?>