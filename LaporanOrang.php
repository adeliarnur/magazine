<?php 
	require('konek.php');
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
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,1000,1000,600,1000" rel="stylesheet">
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
		
		<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row">
					</div>
				</div>
			</section>
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12 post-list">
							<!-- Start latest-post Area -->
							<div class="latest-post-wrap">
								<h4 class="cat-title">Laporan Data Orang</h4>

								<br>
								<form action="" method="GET">
									<div class="input-group mb-3">
										<input type="text" class="form-control" placeholder="Cari Orang" name="namaOrang" aria-label="Orang Hilang" aria-describedby="basic-addon2">
											<div class="input-group-append">
												<button type="submit" class="btn btn-primary" name="cari">Cari</button>
											</div>
									</div>
								</form>
								


								<div class="single-latest-post row align-items-center">
									<div class="col-lg-1 post-left">
									</div>
									<div class="col-lg-10 post-right">
										<p class="meta">
											<table>
															<?php
															$mysqli = new mysqli('localhost', 'root', '', 'psi') or die(mysql_error($mysqli));

															if(isset($_GET['cari'])){
																$cari = $_GET['namaOrang'];
																$data = $mysqli->query("SELECT dataorang.Nama, status.Status, penilaian.nilai_status, dataorang.NamaAyah, dataorang.NamaIbu, dataorang.Gender, dataorang.Usia, dataorang.TempatLahir, dataorang.AlamatAkhir, dataorang.Kewarganegaraan, dataorang.Deskripsi FROM dataorang, status, penilaian WHERE dataorang.status = status.ID_Status && dataorang.nilai = penilaian.id_nilai AND Nama like '%".$cari."%'");
															}else{
																//$mysqli = new mysqli('localhost', 'root', '', 'psi') or die(mysql_error($mysqli));
																$data = $mysqli->query("SELECT dataorang.Nama, status.Status, penilaian.nilai_status, dataorang.NamaAyah, dataorang.NamaIbu, dataorang.Gender, dataorang.Usia, dataorang.TempatLahir, dataorang.AlamatAkhir, dataorang.Kewarganegaraan, dataorang.Deskripsi FROM dataorang, status, penilaian WHERE dataorang.status = status.ID_Status && dataorang.nilai = penilaian.id_nilai");
																}
																?>

																
															<?php
															while ($row = $data->fetch_assoc()): ?>
												<tr>
													<th rowspan="2">
														<table style="font-size: 12px">
															<tr>
															    <th style="padding-right: 10px">Nama.</th>
															    <th style="padding-right: 100px"><?php echo $row['Nama']; ?></th>
												  			</tr>
															<tr>
															    <th style="padding-right: 10px">Status Data.</th>
															    <th style="padding-right: 100px"><font color="red"><?php echo $row['nilai_status']; ?></font></th>
												  			</tr>
												  			<tr>
															    <th style="padding-right: 10px">Status Orang.</th>
															    <th style="padding-right: 100px"><font color="red"><?php echo $row['Status']; ?></font></th>
												  			</tr>
												  			<tr>
															    <th style="padding-right: 10px">Ayah.</th>
															    <th style="padding-right: 100px"><?php echo $row['NamaAyah']; ?></th>
												  			</tr>
												  			<tr>
															    <th style="padding-right: 10px">Ibu.</th>
															    <th style="padding-right: 100px"><?php echo $row['NamaIbu']; ?></th>
												  			</tr>
												  			<tr>
															    <th style="padding-right: 10px">Gender</th>
															    <th style="padding-right: 100px"><?php echo $row['Gender']; ?></th>
												  			</tr>

												  			<tr>
															    <th style="padding-right: 10px">Usia</th>
															    <th style="padding-right: 100px"><?php echo $row['Usia']; ?></th>
												  			</tr>
												  			<tr>
															    <th style="padding-right: 10px">Tempat Lahir</th>
															    <th style="padding-right: 100px"><?php echo $row['TempatLahir']; ?></th>
												  			</tr>
												  			<tr>
															    <th style="padding-right: 40px">Alamat terakhir</th>
															    <th><?php echo $row['AlamatAkhir']; ?></th>
												  			</tr>
												  			<tr>
															    <th style="padding-right: 40px">Kewarganegaraan</th>
															    <th><?php echo $row['Kewarganegaraan']; ?></th>
												  			</tr>
														</table>
													</th>
												</tr>
												<tr>
													<th width="500px">
														<table>
															<tr>
															    <th style="color: black; padding-right: 50px" width="500px" >Deskripsi</th>
												  			</tr>
												  			<tr>
												  				<th width="500px" colspan="2" height="200px" align="right" valign="top">
												  					<?php echo $row['Deskripsi']; ?>
												  				</th>
												  			</tr>
														</table>
													</th>
												</tr>
												<tr>
													<th>
														<p></p>
														<br>
													</th>
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

										</p>
									</div>
								</div>


							<!-- End latest-post Area -->

						</div>
					</div>
				</div>
			</div>
		</section>
			<!-- End latest-post Area -->
		</div>
		
		<!-- start footer Area -->
		<?php include "includes/footer.php"; ?>
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