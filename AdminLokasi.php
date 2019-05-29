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
		<link rel="stylesheet" href="css/bootstrap-datepicker3.standalone.min.css">


	</head>
	<body>
		<header>
			<?php include "includes/header-admin.php"; ?>
		</header>
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12 post-list">
							<!-- Start latest-post Area -->
					<div class="latest-post-wrap">
								<h4 class="cat-title">Cadangan Makanan</h4>
								<br>
								<div class="comment-form">
									<h4>Input Lokasi</h4>

									<?php
										if(isset($_GET['edit'])){

										$mysqli = new mysqli('localhost','root','','psi') or die(mysql_error($mysqli));
										$res=mysqli_query($mysqli,"SELECT * FROM lokasi WHERE ID_lokasi='".$_GET['edit']."'");
										$hasil=mysqli_fetch_assoc($res);


										$id_lokasi = $hasil['ID_lokasi'];
										$nama = $hasil['nama'];
										$provinsi = $hasil['provinsi'];
										$kecamatan = $hasil['kecamatan'];
										$desa = $hasil['desa'];

										?>
									<form action="prosesLokasi.php" method="POST">
										<input type="text" class="form-control"
											    value="<?php echo $_GET['edit']; ?>" hidden="hidden" placeholder="masukkan nama" name="id">

										<div class="form-group form-inline">
											<div class="form-group col-lg-6 col-md-12 nama">
												<input type="text" class="form-control"
												value="<?php echo $nama; ?>" placeholder="Masukkan nama lokasi" name="nama" required oninvalid="this.setCustomValidity('Nama Belum Diisi')" oninput="setCustomValidity('')">
											</div>
											

											<div class="form-group col-lg-6 col-md-12 provinsi">
												<input type="text" class="form-control"
												value="<?php echo $provinsi; ?>" placeholder="Masukkan Provinsi" name="provinsi" required oninvalid="this.setCustomValidity('Provinsi Belum Diisi')" oninput="setCustomValidity('')">
											</div>
										</div>

										<div class="form-group form-inline">
											<div class="form-group col-lg-6 col-md-12 kecamatan">
												<input type="text" class="form-control"
												value="<?php echo $kecamatan; ?>" placeholder="Masukkan kecamatan" name="kecamatan" required oninvalid="this.setCustomValidity('kecamatan Belum Diisi')" oninput="setCustomValidity('')">
											</div>

											<div class="form-group col-lg-6 col-md-12 Cluster">
												<input type="text" class="form-control"
												value="<?php echo $desa; ?>" placeholder="Masukkan Desa" name="desa" required oninvalid="this.setCustomValidity('Desa Belum Diisi')" oninput="setCustomValidity('')">
											</div>
										</div>
										<button type="submit" name="update" class="primary-btn text-uppercase">Post</button>
									</form>
								</div>

									<?php }
									else{ ?>

									<form action="prosesLokasi.php" method="POST">
										<input type="text" class="form-control"
											    value="" hidden="hidden" placeholder="masukkan nama" name="id">

										<div class="form-group form-inline">

											<div class="form-group col-lg-6 col-md-12 nama">
												<input type="text" class="form-control"
												value="" placeholder="Masukkan nama lokasi" name="nama" required oninvalid="this.setCustomValidity('Nama Belum Diisi')" oninput="setCustomValidity('')">
											</div>
											

											<div class="form-group col-lg-6 col-md-12 provinsi">
												<input type="text" class="form-control"
												value="" placeholder="Masukkan Provinsi" name="provinsi" required oninvalid="this.setCustomValidity('Provinsi Belum Diisi')" oninput="setCustomValidity('')">
											</div>
										</div>



										<div class="form-group form-inline">
											<div class="form-group col-lg-6 col-md-12 kecamatan">
												<input type="text" class="form-control"
												value="" placeholder="Masukkan kecamatan" name="kecamatan" required oninvalid="this.setCustomValidity('kecamatan Belum Diisi')" oninput="setCustomValidity('')">
											</div>

											<div class="form-group col-lg-6 col-md-12 Cluster">
												<input type="text" class="form-control"
												value="" placeholder="Masukkan Desa" name="desa" required oninvalid="this.setCustomValidity('Desa Belum Diisi')" oninput="setCustomValidity('')">
											</div>
										</div>
											
										<button type="submit" name="save" class="primary-btn text-uppercase">Post</button>
									</form>


								</div>
								<?php } ?>

								<br>
									<form action="" method="GET">
										<div class="input-group mb-3">
											<input type="text" class="form-control" placeholder="Cari Berdasarkan nama lokasi" name="lokasi" aria-label="lokasi"aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button type="submit" class="btn btn-primary" name="cari">Cari</button>
										</div>
									</div>
								</form>

								</div>
								<center>
									<table style="width:100%" cellpadding="10" border="1px">
									  <tr bgcolor="F6214B" style="color: white">
									  	<th><center>Nama</center></th>
									    <th><center>Provinsi</center></th>
									    <th><center>Kecamatan</center></th>
									    <th><center>Desa</center></th>
									    <th colspan="2"><center>status</center></th>
									  </tr>
													<?php
													$mysqli = new mysqli('localhost', 'root', '', 'psi') or die(mysql_error($mysqli));

													if(isset($_GET['cari'])){
														$cari = $_GET['nama'];
														$data = $mysqli->query("SELECT * FROM lokasi WHERE nama like '%".$cari."%'");
													}else{
														//$mysqli = new mysqli('localhost', 'root', '', 'psi') or die(mysql_error($mysqli));
														$data = $mysqli->query("SELECT * FROM lokasi ORDER BY nama ASC");
														}
														?>

									  				<?php while ($row = $data->fetch_assoc()): ?>
									  <tr>
									  	<td><?php echo $row['nama']; ?></td>
									    <td><?php echo $row['provinsi']; ?></td>
									    <td><?php echo $row['kecamatan']; ?></td>
									    <td><?php echo $row['desa']; ?></td>
									    <td><a href="AdminLokasi.php?edit=<?php echo $row['ID_lokasi']; ?>" class="btn btn-success">Edit</a></td>
									    <td><a href="prosesLokasi.php?delete=<?php echo $row['ID_lokasi']; ?>" class="btn btn-danger">Delete</a></td>
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
		<script src="js/bootstrap-datepicker.min.js"></script>




	</body>
</html>
