<?php
	require('konek.php');
	$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Magazine</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/main.css">



	</head>
	<body>
		<header>
			<?php include "includes/header.php"; ?>
		</header>

			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12 post-list">
							<!-- Start latest-post Area -->
					<div class="latest-post-wrap">
								<h4 class="cat-title">Cadangan Makanan</h4>
								<br>
								<br>
								<form action="" method="GET">
									<div class="input-group mb-3">
										<input type="text" class="form-control" placeholder="Cari Berdasarkan Lokasi" name="lokasi" aria-label="lokasi" aria-describedby="basic-addon2">
											<div class="input-group-append">
												<button type="submit" class="btn btn-primary" name="cari">Cari</button>
											</div>
									</div>
								</form>

								<center>
									<table style="width:100%" cellpadding="10" border="1px">
									  <tr bgcolor="F6214B" style="color: white">
									  	<th><center>Lokasi</center></th>
									    <th><center>Nama Makanan</center></th>
									    <th><center>Penanggung Jawab</center></th>
									    <th><center>Kelebihan</center></th>
									    <th><center>Kekurangan</center></th>
									  </tr>
													<?php
													$mysqli = new mysqli('localhost', 'root', '', 'psi') or die(mysql_error($mysqli));

													if(isset($_GET['cari'])){
														$cari = $_GET['lokasi'];
														$data = $mysqli->query("SELECT  makanan.id_makanan, lokasi.nama, makanan.nama_makanan, makanan.penanggung_jawab, makanan.kelebihan, makanan.kekurangan FROM makanan, lokasi WHERE makanan.id_lokasi = lokasi.ID_lokasi AND nama like '%".$cari."%' AND lokasi.id_lokasi=$id");
													}else{
														//$mysqli = new mysqli('localhost', 'root', '', 'psi') or die(mysql_error($mysqli));
														$data = $mysqli->query("SELECT  makanan.id_makanan, lokasi.nama, makanan.nama_makanan, makanan.penanggung_jawab, makanan.kelebihan, makanan.kekurangan FROM makanan, lokasi WHERE makanan.id_lokasi = lokasi.ID_lokasi AND lokasi.id_lokasi=$id ORDER BY nama ASC ");
														}
														?>

									  				<?php		while ($row = $data->fetch_assoc()): ?>

									  <tr>
									  	<td><?php echo $row['nama']; ?></td>
									    <td><?php echo $row['nama_makanan']; ?></td>
									    <td><?php echo $row['penanggung_jawab']; ?></td>
									    <td><?php echo $row['kelebihan']; ?></td>
									    <td><?php echo $row['kekurangan']; ?></td>
									  </tr>

									<?php endwhile; ?>
									</table>

											<?php
												function pre_r($array){
												echo '<pre>';
												print_r($array);
												echo '</pre>';
											}
										?>
								</center>

								</div>
							</div>
						</div>
						</div>
					</section>




		<!-- start footer Area -->
		<?php

include "includes/footer.php";

?>
		<!-- End footer Area -->
		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="js/easing.min.js"></script>
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/mn-accordion.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/mail-script.js"></script>
		<script src="js/main.js"></script>




	</body>
</html>
