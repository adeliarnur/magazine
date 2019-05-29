<html>
<head>
	<title>Upload File</title>
</head>
<body>

	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

// Create connection
	$conn = new mysqli($servername, $username, $password,"psi");

// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";







//IF DATA IMAGE CHANGED
//AMBIL DATA DARI FORM

	$nama_file = $_FILES['gambar']['name'];
	$ukuran_file = $_FILES['gambar']['size'];
	$tipe_file = $_FILES['gambar']['type'];
	$tmp_file = $_FILES['gambar']['tmp_name'];




	if($_POST['nama']){

		$ekstensi_diperbolehkan	= array('png','jpg');
		
		// $nama = $_FILES['file']['name'];
		
		$x = explode('.', $nama_file);
		
		$ekstensi = strtolower(end($x));
		
		// $ukuran	= $_FILES['file']['size'];
		
		// $file_tmp = $_FILES['file']['tmp_name'];	

		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){

			// if($ukuran_file < 1044070){	
			$id = $_POST['id'];

			echo $id;		

			$dir_image = 'img/PY/'.$nama_file;

			$judul = $_POST['nama'];

			// $bahan = $_POST['bahan'];

			// $alat = $_POST['alat'];

			$desk = $_POST['keterangan'];

			// move_uploaded_file($tmp_file, $dir_image);


			$sql = "UPDATE `desease` SET `Nama`='".$judul."' ,  `Keterangan`='".$desk."', `Gambar`='".$dir_image."' WHERE id = '".$id."'";


			if($conn->query($sql)){
				?>
				<script type="text/javascript">
					alert("UPDATE SUKSES");
					window.location.href = "admin_penyakit.php";
				</script>

				<?php
			}else{
				?>
				<script type="text/javascript">
					alert("UPDATE GAGAL :C");
					window.location.href = "admin_penyakit.php";
				</script>
				<?php
			}
			// }else{
				// echo 'UKURAN FILE TERLALU BESAR';
			// }
		}else{

			$judul = $_POST['nama'];

			// $bahan = $_POST['bahan'];

			// $alat = $_POST['alat'];

			$desk = $_POST['keterangan'];

			$id = $_POST['id'];

			$sql = "UPDATE `desease` SET `Nama`='".$judul."' ,  `Keterangan`='".$desk."' WHERE id = '".$id."' ";

			if($conn->query($sql)){
				?>
				<script type="text/javascript">
					alert("UPDATE SUKSES");
					window.location.href = "admin_penyakit.php";
				</script>
				<?php
			}
			else{
				?>
				<script type="text/javascript">
					alert("UPDATE GAGAL :C");
					window.location.href = "admin_penyakit.php";
				</script>
				<?php
			}


		}
	}
	// $conn->close();
	?>
</body>
</html>