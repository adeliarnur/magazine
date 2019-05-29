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
								<h4 class="cat-title">Nomor Penting</h4>
								<br>
								<div class="comment-form">
									<h4>Input Nomor Penting</h4>

									<?php 
										if(isset($_GET['edit'])){ 

										$mysqli = new mysqli('localhost','root','','psi') or die(mysql_error($mysqli));
										$res=mysqli_query($mysqli,"SELECT * FROM kontak WHERE id_kontak='".$_GET['edit']."'");
										$hasil=mysqli_fetch_assoc($res);


										$nama = $hasil['nama_kontak'];
										$lembaga = $hasil['lembaga'];
										$kota = $hasil['nama_kota'];
										$nomor = $hasil['no_kontak'];
										$cluster = $hasil['cluster'];

										?>
									<form action="proseskontak.php" method="POST">
										<input type="text" class="form-control" 
											    value="<?php echo $_GET['edit']; ?>" hidden="hidden" placeholder="masukkan nama" name="id">

										<div class="form-group form-inline">

											<div class="form-group col-lg-6 col-md-12 NamaKontak">
												<input type="text" class="form-control" 
												value="<?php echo $nama; ?>" placeholder="Masukkan Nama Kontak" name="nama" required oninvalid="this.setCustomValidity('Nama Belum Diisi')" oninput="setCustomValidity('')">
											</div>

											<div class="form-group col-lg-6 col-md-12 NomorKontak">
												<input type="text" class="form-control" 
												value="<?php echo $nomor; ?>" placeholder="Masukkan Nomor Kontak" name="nomor" required oninvalid="this.setCustomValidity('Nomor Belum Diisi')" oninput="setCustomValidity('')">
											</div>
										</div>

										<div class="form-group form-inline">
											<div class="form-group col-lg-6 col-md-12 Lembaga">
												<input type="text" class="form-control" 
												value="<?php echo $lembaga; ?>" placeholder="Masukkan Lembaga" name="lembaga" required oninvalid="this.setCustomValidity('Lembaga Belum Diisi')" oninput="setCustomValidity('')">
											</div>

											<div class="form-group col-lg-6 col-md-12 Cluster">
												<input type="text" class="form-control" 
												value="<?php echo $cluster; ?>" placeholder="Masukkan Cluster" name="cluster" required oninvalid="this.setCustomValidity('Cluster Belum Diisi')" oninput="setCustomValidity('')">
											</div>
										</div>
											<div class="form-group col-lg-6 col-md-12 Kota">
												<input type="text" class="form-control" 
												value="<?php echo $kota; ?>" placeholder="Masukkan Kota" name="kota" required oninvalid="this.setCustomValidity('Kota Belum Diisi')" oninput="setCustomValidity('')">
											</div>
										<button type="submit" name="update" class="primary-btn text-uppercase">Post</button>
									</form>
								</div>
								
									<?php }
									else{ ?>

									<form action="proseskontak.php" method="POST">
										<input type="text" class="form-control" 
											    value="" hidden="hidden" placeholder="masukkan nama" name="id">

										<div class="form-group form-inline">
											<div class="form-group col-lg-6 col-md-12 NamaKontak">
												<input type="text" class="form-control" 
												value="" placeholder="Masukkan Nama Kontak" name="nama" required oninvalid="this.setCustomValidity('Nama Belum Diisi')" oninput="setCustomValidity('')">
											</div>

											<div class="form-group col-lg-6 col-md-12 NomorKontak">
												<input type="text" class="form-control" 
												value="" placeholder="Masukkan Nomor Kontak" name="nomor" required oninvalid="this.setCustomValidity('Nomor Belum Diisi')" oninput="setCustomValidity('')">
											</div>
										</div>

										<div class="form-group form-inline">
											<div class="form-group col-lg-6 col-md-12 Lembaga" >
												<input type="text" class="form-control" 
												value="" placeholder="Masukkan Lembaga" name="lembaga" required oninvalid="this.setCustomValidity('Lembaga Belum Diisi')" oninput="setCustomValidity('')">
											</div>

											<div class="form-group col-lg-6 col-md-12 Cluster">
												<input type="text" class="form-control" 
												value="" placeholder="Masukkan Cluster" name="cluster" required oninvalid="this.setCustomValidity('Cluster Belum Diisi')" oninput="setCustomValidity('')">
											</div>
										</div>
											<div class="form-group col-lg-6 col-md-12 Kota">
												<input type="text" class="form-control" 
												value="" placeholder="Masukkan Kota" name="kota" required oninvalid="this.setCustomValidity('Kota Belum Diisi')" oninput="setCustomValidity('')">
											</div>
										<button type="submit" name="save" class="primary-btn text-uppercase">Post</button>
									</form>


								</div>
								<?php } ?>

								<br>
									<form action="" method="GET">
										<div class="input-group mb-3">
											<input type="text" class="form-control" placeholder="Cari Berdasarkan Kota" name="namakota" aria-label="namakota"aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button type="submit" class="btn btn-primary" name="cari">Cari</button>
										</div>
									</div>
								</form>

								</div>
								<center>
									<table style="width:100%" cellpadding="10" border="1px">
									  <tr bgcolor="F6214B" style="color: white">
									  	<th><center>Kota</center></th>
									    <th><center>Lembaga</center></th>
									    <th><center>Nama Kontak</center></th> 
									    <th><center>Nomor Kontak</center></th>
									    <th><center>Cluster</center></th>
									    <th colspan="2"><center>status</center></th>
									  </tr>
													<?php
													$mysqli = new mysqli('localhost', 'root', '', 'psi') or die(mysql_error($mysqli));

													if(isset($_GET['cari'])){
														$cari = $_GET['namakota'];
														$data = $mysqli->query("SELECT * FROM kontak WHERE nama_kota like '%".$cari."%'");
													}else{
														//$mysqli = new mysqli('localhost', 'root', '', 'psi') or die(mysql_error($mysqli));
														$data = $mysqli->query("SELECT * FROM kontak ORDER BY nama_kota ASC");
														}
														?>

									  				<?php while ($row = $data->fetch_assoc()): ?>
									  <tr>
									  	<td><?php echo $row['nama_kota']; ?></td>
									    <td><?php echo $row['lembaga']; ?></td>
									    <td><?php echo $row['nama_kontak']; ?></td> 
									    <td><?php echo $row['no_kontak']; ?></td>
									    <td><?php echo $row['cluster']; ?></td>
									    
									    <td><a href="Adminkontak.php?edit=<?php echo $row['id_kontak']; ?>" class="btn btn-success">Edit</a></td>
									    <td><a href="proseskontak.php?delete= <?php echo $row['id_kontak']; ?>" class="btn btn-danger">Delete</a></td>
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
