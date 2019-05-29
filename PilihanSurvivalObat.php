<!DOCTYPE html>
<html lang="zxx" class="no-js">
<?php
include "koneksi.php";
$query = mysqli_query($connection,"SELECT * FROM drug ORDER BY id ASC");
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
			<?php include "includes/header.php"; ?>
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
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
				<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
			<div class="row">
			
			<table class="table table-striped table-bordered">
				<thead class="thead-dark">
					<tr>
						<th scope="col"colspan="5">Obat</th>
					</tr>
				</thead>

				<tbody>
					<?php if(mysqli_num_rows($query)>0){ ?>
						<?php while($data = mysqli_fetch_array($query)){ ?>
							<tr>
								<td ><img src="<?php echo $data["dir_img_obat"];?>"style="width: 290px;height: 200px;"></td>
								<td><h4><?php echo $data["judul_obat"];?></h4></td>
								<td><?php echo $data["deskr"];?></td>
							</tr>
						<?php } ?>
				    <?php } ?>
						
					</tbody>
				</table>
			</div>
		</div>
			<!--<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12 post-list">
							<!-- Start latest-post Area 
							<div class="latest-post-wrap">
								<h4 class="cat-title">Obat</h4>


								<div class="single-latest-post row align-items-center">
									<div class="col-lg-3 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="img/obat1.jpg" alt="">
										</div>
									</div>
									<div class="col-lg-9 post-right">
										<a href="image-post.html">
											<h4><a href="">Kunyit</a></h4>
										</a><br>
										<p>Kunyit dikenal sebagai tanaman rempah yang memiliki khasiat untuk mengobati beberapa jenis penyakit diantaranya adalah diare. Untuk membuat obat diare alami dari kunyit:</p>
										<p>Bersihkan kunyit kemudian cuci sampai bersih. Setelah itu rebus kunyit dalam satu gelas air sampai tersisa sekitar 1/3 air di dalam panci. Tambahkan kapur sirih kemudian aduk sampai merata. Setelah air rebusan kunyit dingin, saring air kemudian konsumsi 3 kali sehari. Minumkan resep obat tradisional ini beberapa kali sampai diare si kecil sembuh.

										</p>
									</div>
								</div>	

								<div class="single-latest-post row align-items-center">
									<div class="col-lg-3 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="img/obat2.jpg" alt="">
										</div>
									</div>
									<div class="col-lg-9 post-right">
										<a href="image-post.html">
											<h4><a href="">Bawang Putih</a></h4>
										</a><br>
										<p>Konsumsilah 2 siung bawang putih sebelum makan atau saat perut kosong. Lakukan cara ini selama beberapa minggu.</p>
										<p>
										Anda juga dapat menggunakan cara lain dengan mencampurkan ½ sendok teh bawang putih tumbuk dengan secangkir susu dan air. Rebuslah campuran tersebut hingga menjadi  ¼ bagian saja. Minumlah obat tipes tradisional tersebut sebanyak  3 kali per hari.
										</p>
									</div>
								</div>


							</div>
							<!-- End latest-post Area 

						</div>
				</div>
			</div>
		</section>
			<!-- End latest-post Area 
		</div>-->
		
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