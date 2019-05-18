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
			<?php include 'header.php'; ?>
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
								<h4 class="cat-title">Cari Orang Hilang</h4>


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
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 single-footer-widget">
						<h4>Top Products</h4>
						<ul>
							<li><a href="#">Managed Website</a></li>
							<li><a href="#">Manage Reputation</a></li>
							<li><a href="#">Power Tools</a></li>
							<li><a href="#">Marketing Service</a></li>
						</ul>
					</div>
					<div class="col-lg-2 col-md-6 single-footer-widget">
						<h4>Quick Links</h4>
						<ul>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Brand Assets</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>
					</div>
					<div class="col-lg-2 col-md-6 single-footer-widget">
						<h4>Features</h4>
						<ul>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Brand Assets</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>
					</div>
					<div class="col-lg-2 col-md-6 single-footer-widget">
						<h4>Resources</h4>
						<ul>
							<li><a href="#">Guides</a></li>
							<li><a href="#">Research</a></li>
							<li><a href="#">Experts</a></li>
							<li><a href="#">Agencies</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 single-footer-widget">
						<h4>Instragram Feed</h4>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="img/i1.jpg" alt=""></li>
							<li><img src="img/i2.jpg" alt=""></li>
							<li><img src="img/i3.jpg" alt=""></li>
							<li><img src="img/i4.jpg" alt=""></li>
							<li><img src="img/i5.jpg" alt=""></li>
							<li><img src="img/i6.jpg" alt=""></li>
							<li><img src="img/i7.jpg" alt=""></li>
							<li><img src="img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="footer-bottom row align-items-center">
					<p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					<div class="col-lg-4 col-md-12 footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</footer>
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