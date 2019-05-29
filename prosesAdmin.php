<?php

session_start();


$mysqli = new mysqli('localhost','root','','psi') or die(mysql_error($mysqli));


///////////////////////////////////////////////////////////////////////// create data orang

if (isset($_POST['save'])){

	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];

	$sql_a = "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='$nama' ";
	$res_a = mysqli_query($mysqli, $sql_a) or die(mysqli_error($mysqli));

	if(mysqli_num_rows($res_a) > 0){
		echo "<script>alert('Data Pernah Diinput Sebelumnya'); </script>";
		echo "<script>window.location='AdminTambahAkun.php';</script>";
	}else
	{
		$query = "INSERT INTO users (username, password, role) VALUES('$username', '$password', '$nama')";
		$result = mysqli_query($mysqli, $query) OR die(mysqli_error($mysqli));
		echo "<script>alert('Data Berhasil Ditambahkan'); </script>";
		echo "<script>window.location='AdminTambahAkun.php';</script>";

	}
}
////////////////////////////////////////////////////////////////////////Update data orang
if (isset($_POST['update'])){
	$id = $_POST['id'];

	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];

	$mysqli->query("UPDATE users SET username = '$username', password = '$password', role = '$nama' WHERE id ='$id'") or die($mysqli->error);

	echo "<script>alert('Update Data Berhasil'); </script>";
	echo "<script>window.location='AdminTambahAkun.php';</script>";
}

//////////////////////////////////////////////////////////////////////Delete data orang

if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM users WHERE id=$id") or die($mysqli->error());

	echo "<script>alert('Delete Data Berhasil'); </script>";
	echo "<script>window.location='AdminTambahAkun.php';</script>";

}



?>
