<!--  link component : https://use.fontawesome.com/releases/v5.8.1/css/all.css -->
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

$seleted = mysqli_select_db($conn,"psi");
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
else{
	echo "Connected successfully";
}

$query = mysqli_query($conn,"SELECT * FROM tabel_penyakit ORDER BY id DESC");
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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

	

	<style type="text/css">

		.searchbar{
			display: inline-flex;
			margin-top: 20px;
			margin-bottom: 10px;
			height: 60px;
			width: 60px;
			background-color: #353b48;
			border-radius: 30px;
			padding: 10px;
		}
		.searchbar:hover > .search_input{
			margin-left: 30px;
			padding: 0 /*10px*/;
			width: 80%;
			caret-color:red;
			transition: width 0.4s linear;
		}
		.searchbar:hover{
			width: 100%;
			caret-color:red;
			transition: width 0.4s linear;
		}
		.searchbar:hover > .search_icon{
			background: white;
			color: #e74c3c;
		}
		.search_input{
			margin-left: 0px;
			color: white;
			border: 0;
			outline: 0;
			background: none;
			width: 0%;
			caret-color:transparent;
			line-height: 40px;
			transition: width 0.4s linear;
		}
		.search_icon{
			height: 40px;
			width: 40px;
			float: right;
			display: flex;
			justify-content: center;
			align-items: center;
			border-radius: 50%;
			color:white;
		}
		.search_icon:focus{
			outline:none;
		}
		.text_input{
			width: 100%;
			/*border-radius: 20px;*/	
			outline: none;
			padding-left: 10px;
		}
		.text_input:focus{
			border: 3px solid #555;
			border-color: rgb(91,192,222);
		}
		.label_text{
			text-align: left;
			margin-top: 10px;
			font-weight: 400;
			color: black;
		}



	</style>
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
						</ul>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
						<ul>
							<li><a href="tel:+440 012 3654 896"><span class="lnr lnr-phone-handset"></span><span>ADMINISTRATOR</span></a></li>
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
						<li class="menu-active"><a href="admin.html">Home</a></li>

						<li class="menu-has-children"><a href="">Materi</a>
							<ul>
								<li><a href="AdminMinimalisirDampakBencana.html">Pra Bencana</a></li>
								<li><a href="#">Survival</a>
									<ul>
										<li><a href="admin_creatingtool.html">Creating tools</a></li>
										<li><a href="admin_penyakit.html">Penyakit</a></li>
										<li><a href="admin_obat.html">Obat</a></li>
									</ul>
								</li>
							</ul>
						</li>

						<li><a href="">Cari Orang</a>
							<ul>
								<li><a href="AdminPilihanOrangHilang.html">Orang Hilang</a></li>
								<li><a href="AdminPilihanOrangDitemukan.html">Orang Ditemukan</a></li>
							</ul>
						</li>


						<li class="menu-has-children"><a href="">Info Bencana</a>
							<ul>
								<li><a href="AdminCadangan.html">Storage Bahan Makanan</a></li>
								<li><a href="AdminStatusKeadaanBencana.html">Status Keadaan Bencana</a></li>
							</li>
						</ul>
						<li><a href="Adminkontak.html">Kontak</a></li>
					</nav>
				</div>
			</div>
		</header>

		<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
			<div class="row">

				<div class="col-sm-12">
					<h1 style="text-align: center;">EDIT DESEASE SECTION</h1>
				</div>
				<div class="col-sm-8">
					<div style="margin-top: 40px;margin-bottom: 10px;">
						<button class="btn btn-primary" data-toggle="modal" data-target="#modal_add_penyakit"><i class="fas fa-plus-circle"></i>     ADD DESEASE</button>
					</div>
				</div>
				<!-- <div class="col-sm-4" style="text-align: right;"> -->
					<!-- <form class="searchbar"> -->
						<!-- <input type="text" name="search_input" class="search_input" placeholder="Search..."> -->
						<!-- <button class="search_icon" style="border-color: grey;"><i class="fas fa-search"></i></button> -->
						<!-- </form> -->
						<!-- </div> -->
					</div>



					<table class="table table-striped table-bordered">
						<thead class="thead-dark">
							<tr style="text-align: center;">
								<th scope="col">No.</th>
								<th scope="col">NAMA</th>
								<th scope="col">KETERANGAN</th>
								<th scope="col" style="text-align: center;">GAMBAR</th>
								<th scope="col" style="text-align: center;">-</th>
								<th scope="col" style="text-align: center;">-</th>

							</tr>
						</thead>

						<tbody>
							<?php if(mysqli_num_rows($query)>0){ ?>
								<?php
								$no = 1;
								while($data = mysqli_fetch_array($query)){
									?>
									<tr>
										<td style="text-align: center;"><?php echo $no ?></td>
										<td><?php echo $data["Nama"];?></td>
										<td><?php echo $data["Keterangan"];?></td>
										<td style="text-align: center;"><img src="<?php echo $data["Gambar"];?>" style="width: 40px;height: 40px;"></td>

										<td style="text-align: center;">
											<a href="Admin_Penyakit_Delete_action.php? id=<?php echo $data['id']; ?>"><button type="button"  class="btn btn-danger">DELETE</button></a>
										</td>

										<td style="text-align: center;">
											<button type="button" data-toggle="modal" data-target="#modal_update" class="btn btn-primary">UPDATE
											</button>
										</td>

									</tr>



									<!-- MODAL START -->
									<!-- UPDATE -->
									<div class="modal fade" id="modal_update" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered">
											<div class="modal-content">

												<!-- Modal Header -->
												<div class="modal-header" style="text-align: center;">
													<h4 class="modal-title" >UPDATE DESEASE SECTION</h4>
													<button type="button" class="close" data-dismiss="modal">&times;</button>
												</div>

												<!-- Modal body -->
												<div class="modal-body" >

													<form action="Admin_Penyakit_Update_action.php" enctype="multipart/form-data" method="post" style="margin-bottom: 0px;">

														<input  type="hidden" value="<?php echo $data['id'];?>" name="id">
														<div class="label_text">Nama</div>

														<input type="text" name="nama" placeholder="Nama Penyakit" class="text_input" value="<?php echo $data["Nama"] ?>" required>
														<div class="label_text">Keterangan*</div>

														<textarea type="text" name="keterangan" placeholder="Masukkan Keterangan Penyakit" class="text_input" required><?php echo $data["Keterangan"]; ?></textarea>
														<div class="label_text">GAMBAR*</div>
														<div style="text-align: center; margin-top: 5px; margin-bottom: 5px;">
															<img src="<?php echo $data["Gambar"] ?>" style="width: 180px; text-align: left;">
														</div>

														<input type="file" name="gambar" value="Upload" style="width: 100%;" accept="image/x-png,image/gif,image/jpeg">
														<div style="width: 100%; text-align: right;">

															<button type="submit" class="btn btn-primary" style="margin-top: 20px;" style=""><i class="fas fa-plus-circle"></i>       CONFRIM</button>
															<button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-top: 20px; text-align: center;">Close</button>
														</div>
													</form>

												</div>

												<!-- Modal footer -->
												<div class="modal-footer" style="text-align: right;">
													@2019
												</div>

											</div>
										</div>
									</div>


									<!-- MODAL END -->








									<?php $no++; } ?>
								<?php } ?>

							</tbody>
						</table>

						<div class="row">
							<div class="col ">
								BMKG
							</div>
							<div class="col col-md-auto ">
								<div class="text-right" role="toolbar" aria-label="Toolbar with button groups">
									<div class="btn-group mr-2" role="group" aria-label="First group" >
										<button type="button" class="btn btn-secondary"> 
											<i class="fas fa-angle-double-left"></i>
										</button>
										<button type="button" class="btn btn-secondary">
											<i class="fas fa-angle-left"></i>
										</button>
										<button class="btn btn-secondary">
											PAGE 1
										</button>
										<button type="button" class="btn btn-secondary">
											<i class="fas fa-angle-right"></i>
										</button>
										<button type="button" class="btn btn-secondary">
											<i class="fas fa-angle-double-right"></i>
										</button>
									</div>
								</div>
							</div>
						</div>


					</div>




					<!-- KONTAIN END -->
					<!-- FOOTHER -->


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


						<!-- MODAL START -->
						<!-- ADD DESEASE -->


						<div class="modal fade" id="modal_add_penyakit" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">

									<!-- Modal Header -->
									<div class="modal-header" style="text-align: center;">
										<h4 class="modal-title" >ADD DESEASE SECTION</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<!-- Modal body -->
									<div class="modal-body" >

										<form action="Admin_Penyakit_Add_action.php " enctype="multipart/form-data" method="post" style="margin-bottom: 0px;">
											<div class="label_text">Nama</div>
											<input type="text" name="nama" placeholder="Nama Penyakit" class="text_input" required>
											<div class="label_text">Keterangan*</div>
											<textarea type="text" name="keterangan" placeholder="Masukkan Keterangan Penyakit" class="text_input" required></textarea>
											<div class="label_text">GAMBAR*</div>
											<input type="file" name="gambar" value="Upload" style="width: 100%;" accept="image/x-png,image/gif,image/jpeg" required>
											<div style="width: 100%; text-align: right;">
												<button type="submit" class="btn btn-primary" style="margin-top: 20px;" style=""><i class="fas fa-plus-circle"></i>       CONFRIM</button>
												<button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-top: 20px; text-align: center;">Close</button>
											</div>
										</form>

									</div>

									<!-- Modal footer -->
									<div class="modal-footer" style="text-align: right;">
										@2019
									</div>

								</div>
							</div>
						</div>


						<!-- MODAL END -->
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