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
        <?php if (function_exists("tambahCss")) tambahCss(); ?>
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
								<li><a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span><span>BMKG@gmail.co.id</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="logo-wrap">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-2 col-md-2 col-sm-10 logo-left no-padding">
							<a href="./">
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
							<li class="menu-active"><a href="AdminIndex.php">Beranda</a></li>

							<li class="menu-has-children"><a href="#">Materi</a>
								<ul>
									<li class="menu-has-children"><a href="prabencana_admin.php">Pra Bencana</a></li>
									<li><a href="#">Survival</a>
										<ul>
											<li><a href="admin_creatingtool.php">Creating tools</a></li>
											<li><a href="admin_penyakit.php">Penyakit</a></li>
											<li><a href="admin_obat.php">Obat</a></li>
										</ul>
									</li>
								</ul>
							</li>

							<li><a href="#">Cari Orang</a>
								<ul>
									<li><a href="AdminPilihanOrangHilang.php">Orang Hilang</a></li>
									<li><a href="AdminPilihanOrangDitemukan.php">Orang Ditemukan</a></li>
									<li><a href="AdminLaporan.php">Laporan Orang</a></li>
								</ul>
							</li>


							<li class="menu-has-children"><a href="#">Info Bencana</a>
							<ul>
								<li><a href="AdminCadangan.php">Storage Bahan Makanan</a></li>
								<li><a href="AdminStatusBencana.php">Status Keadaan Bencana</a></li>
								<li><a href="AdminLokasi.php">Lokasi Bencana</a></li>
							</li>
					</ul>
							<li><a href="Adminkontak.php">Kontak</a></li>
							<li><a href="AdminTambahAkun.php">Tambah Akun</a></li>
					</nav>
				</div>
			</div>
		</header>
