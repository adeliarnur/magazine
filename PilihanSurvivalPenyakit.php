<!DOCTYPE html>
<html lang="zxx" class="no-js">
<?php
include "koneksi.php";
$query = $connection->query("SELECT * FROM `desease`");

?>
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
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
							<ul>
								<li><a href="tel:+440 012 3654 896"><span class="lnr lnr-phone-handset"></span><span>+440 012 3654 896</span></a></li>
								<li><a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span><span>BMKG@gmail.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="logo-wrap">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-2 col-md-2 col-sm-10 logo-left no-padding">
							<a href="index.html">
								<img class="img-fluid" src="img/BMKG.png" alt="">
							</a>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
							<img class="img-fluid" src="img/Artboard.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="container main-menu" id="main-menu">
				<div class="row align-items-center justify-content-between">
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li class="menu-active"><a href="index.html">Beranda</a></li>

							<li class="menu-has-children"><a href="">Materi</a>
								<ul>
									<li class="menu-has-children"><a href="">Pra Bencana</a>
										<ul>
											<li><a href="PilihanPersiapanDiri.html">Persiapan Diri</a></li>
											<li><a href="PilihanPersiapanIndoor.html">Persiapan Didalam Rumah</a></li>
											<li><a href="PilihanPersiapanOutdoor.html">Persiapan Diluar Rumah</a></li>
										</ul>
									</li>
									<li><a href="#">Survival</a>
										<ul>
											<li><a href="PilihanSurvivalCT.html">Creating tools</a></li>
											<li><a href="PilihanSurvivalPenyakit.html">Penyakit</a></li>
											<li><a href="PilihanSurvivalObat.html">Obat</a></li>
										</ul>
									</li>
								</ul>
							</li>
							
							<li><a href="">Cari Orang</a>
								<ul>
									<li><a href="PilihanOrangHilang.html">Orang Hilang</a></li>
									<li><a href="PilihanOrangDitemukan.html">Orang Ditemukan</a></li>
								</ul>
							</li>
							

							<li class="menu-has-children"><a href="">Info Bencana</a>
							<ul>
								<li><a href="StorageBahanMakan.html">Storage Bahan Makanan</a></li>
								<li><a href="StatusKeadaanBencana.html">Status Keadaan Bencana</a></li>
							</li>
					</ul>
							<li><a href="kontak.html">Kontak</a></li>
					</nav>
				</div>
			</div>
		</header>
		<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12">
							<!-- <div class="hero-nav-area">
								<h1 class="text-white">Archive Posts</h1>
								<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="archive.html">Archive Posts </a></p>
							</div> -->
						</div>
						<div class="col-lg-12">
							<!-- <div class="news-tracker-wrap">
								<h6><span>Breaking News:</span>   <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
							</div> -->
						</div>
					</div>
				</div>
			</section>
			<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
			<div class="row">
			
			<table class="table table-striped table-bordered">
				<thead class="thead-dark">
					<tr>
						<th scope="col"colspan="5">Penyakit</th>
					</tr>
				</thead>

				<tbody>
					<?php if($query->num_rows>0){ ?>
						<?php while($data =$query->fetch_array()){ ?>
							<tr>
								<td><img src="<?php echo $data["dir_img_penyakit"];?>"style="width: 290px;height: 200px;"></td>
								<td><h4><?php echo $data["judul_penyakit"];?></h4></td>
								<td><?php echo $data["deskr"];?></td>
							</tr>
						<?php } ?>
				    <?php } ?>
						
					</tbody>
				</table>
			</div>
		</div>
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
			<!--<table class="table table-striped table-bordered">
				<thead class="thead-dark">
					<tr>
						<th scope="col" colspan="6">Penyakit</th>
					</tr>
				</thead>

			<tbody>
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12 post-list">
							<!-- Start latest-post Area 
							<div class="latest-post-wrap">
							<h4 class="cat-title">Penyakit</h4>-->
					
					<!--<?php if(mysqli_num_rows($query)>0){ ?>
						<?php
						$no=1;
						while($data = mysqli_fetch_array($query)){
							?>
							<tr>
								<td><?php echo $no ?></td>
								<td><?php echo $data["judul_penyakit"];?></td>
								<td><?php echo $data["deskr"];?></td>
								<td><img src="<?php echo $data["dir_img_penyakit"];?>"></td>

								<!--<div class="single-latest-post row align-items-center">
									<div class="col-lg-3 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<td><img src="<?php echo $data["dir_img_penyakit"];?>"></td>
										</div>
									</div>
									<div class="col-lg-9 post-right">
										<a href="image-post.html">
											<td><h4><a href="PersiapanDiri-post.html"><?php echo $data["judul_penyakit"];?></a></h4></td>
										</a>
										<td><p><?php echo $data["deskr"];?></p></td>
									</div>
								</div>-->
							<!--</tr>
							<?php $no++; } ?>
						<?php } ?> -->
				

								<!--<div class="single-latest-post row align-items-center">
									<div class="col-lg-3 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="img/penyakit2.jpg" alt="">
										</div>
									</div>
									<div class="col-lg-9 post-right">
										<a href="image-post.html">
											<h4><a href="PersiapanDiri-post.html">Demam Berdarah</a></h4>
										</a>
										<p>Demam berdarah dengue (DBD) adalah penyakit menular yang disebabkan oleh virus dengue yang ditularkan melalui gigitan nyamuk Aedes aegypti dan Aedes albopictus. Gejala umumnya timbul 4-7 hari sejak gigitan nyamuk, dan dapat berlangsung selama 10 hari. Beberapa gejala demam berdarah</p>
									</div>
								</div>-->


							<!--</div>
							<!-- End latest-post Area 

						</div>
				</div>
			</div>
		</section>-->

<!--</tbody>
			<!-- End latest-post Area 
		</div>-->
		
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