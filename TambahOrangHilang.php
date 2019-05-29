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
								<h4 class="cat-title">Tambah Data Orang</h4>


								<div class="comment-form">
									<h4>Input Daftar Orang Hilang</h4>
										
<!-- ///////////////////////////////////////////////////////////////////////////save data -->

										<form action="proses2.php" method="POST">
										<div class="form-group form-inline">
											<input type="text" class="form-control" value="" placeholder="masukkan nama" name="nama" required oninvalid="this.setCustomValidity('Nama Belum Diisi')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group form-inline">
											<select name="stat" value="<?php echo $stat; ?>">
												<?php
													$result=mysqli_query($con,"SELECT * FROM status");
													foreach ($result as $row) {
														echo '<option value="'.$row['ID_Status'].'">'.$row['ID_Status']." - ".$row['Status'].'</option>';
													}
												?>
											</select>
										</div>

										<div class="form-group form-inline">
											<input type="text" 
											value="" class="form-control" placeholder="Masukkan Nama Ayah" name="namaayah" required oninvalid="this.setCustomValidity('Nama Ayah Belum Diisi')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group form-inline">
											<input type="text" 
											value="" class="form-control"  required="" placeholder="Masukkan Nama Ibu" name="namaibu" required oninvalid="this.setCustomValidity('Nama Ibu Belum Diisi')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group form-inline">
											<select name="gender"  required="" value="">
												<option value="Laki-laki">Laki-laki</option>
												<option value="Perempuan">Perempuan</option>
											</select>
										</div>

										<div class="form-group form-inline">
											<input type="text" 
											value="" class="form-control" required=""  placeholder="Usia" name="usia" required oninvalid="this.setCustomValidity('Usia Belum Diisi')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group form-inline">
											<input type="text" 
											value="" class="form-control" required=""  placeholder="Kota Lahir" name="kota" required oninvalid="this.setCustomValidity('Kota Lahir Belum Diisi')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group form-inline">
											<input type="text" 
											value="" class="form-control" required="" placeholder="Alamat Terakhir" name="alamat" required oninvalid="this.setCustomValidity('Alamat Terakhir Belum Diisi')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group form-inline">
											<input type="text" 
											value="" class="form-control" required="" placeholder ="Kewarganegaraan" name="negara" required oninvalid="this.setCustomValidity('Negara Belum Diisi')" oninput="setCustomValidity('')">
										</div>


										<div class="form-group">
											<textarea class="form-control mb-10" 
											value="" rows="5" placeholder="Deskripsi Orang Hilang" required oninvalid="this.setCustomValidity('Deskripsi Belum Diisi')" oninput="setCustomValidity('')" onblur="this.placeholder = 'Deskripsi Orang Hilang'" name="deskripsi"></textarea>
										</div>

										<button type="submit" class="primary-btn text-uppercase" name="save_user">Post</button>
									</form>


<!-- //////////////////////////////////////////////////////////////////////////read data	 -->								
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