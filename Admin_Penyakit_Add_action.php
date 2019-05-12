<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "psi";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection){
	die("Connection Failed:".mysqli_connect_error());
}

// $nama 	    = $_POST['nama'];
// $keterangan = $_POST['keterangan'];
// $gambar     = $_POST['gambar'];

$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

// $path = "img/".$gambar;

if($_POST['nama']){

	$ekstensi_diperbolehkan	= array('png','jpg');

	$x = explode('.', $nama_file);

	$ekstensi = strtolower(end($x));

	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){

		$dir_image = 'img/PY/'.$nama_file;

		echo $dir_image;

		$judul = $_POST['nama'];

		echo $judul;

		$desk = $_POST['keterangan'];

		echo $desk;
		move_uploaded_file($tmp_file, $dir_image);

		$sql = "INSERT INTO `tabel_penyakit`(`Nama`, `Keterangan`, `Gambar`) VALUES ('".$judul."','".$desk."','".$dir_image."')";

		if($connection->query($sql)){
			?>
			<script type="text/javascript">
				alert("SUKSES");
				window.location.href = "admin_penyakit.php";
			</script>

			<?php
		}else{
			?>
			<script type="text/javascript">
				alert("GAGAL :C");
				window.location.href = "admin_penyakit.php";
			</script>
			<?php
		}
	}else{
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
	}

	
}



// $query="INSERT INTO tabel_penyakit SET Nama='$nama', Keterangan='$keterangan', Gambar='path'";
// mysqli_query($connection, $query);

// header("location:admin_penyakit.php?pesan=input");
?>