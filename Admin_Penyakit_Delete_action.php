<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "psi";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection){

	die("Connection Failed:".mysqli_connect_error());
}





$id = $_GET['id'];
mysqli_query($connection,"DELETE FROM desease WHERE id='$id'")or die(mysql_error());

header("location:admin_penyakit.php?pesan=delete");
?>