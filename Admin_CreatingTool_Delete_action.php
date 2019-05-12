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

	$id= $_POST['id_CT'];

	// echo $id;
	
	$sql = "DELETE FROM `creatingtool` WHERE id_CT =  '".$id."'";

	if($conn->query($sql)){
		?>
		<script type="text/javascript">
			alert("SUKSES DIHAPUS");
			window.location.href = "admin_creatingtool.php";
		</script>

		<?php
	}else{
		?>
		<script type="text/javascript">
			alert("GAGAL :C");
			window.location.href = "admin_creatingtool.php";
		</script>
		<?php
	}
	?>
</body>
</html>