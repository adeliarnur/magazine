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
								<h4 class="cat-title">Tambah Admin</h4>
								<br>
								<div class="comment-form">
									<h4>Input Lokasi</h4>

									<?php
										if(isset($_GET['edit'])){

										$mysqli = new mysqli('localhost','root','','psi') or die(mysql_error($mysqli));
										$res=mysqli_query($mysqli,"SELECT users.id, users.role, users.username, users.password, users_role.nama FROM users INNER JOIN users_role WHERE users.role = users_role.id AND id='".$_GET['edit']."'");
										$hasil=mysqli_fetch_assoc($res);

										$id = $hasil['id'];
										$username = $hasil['username'];
										$password = $hasil['password'];
										$role = $hasil['role'];
										$nama = $hasil['nama'];

										?>
									<form action="prosesAdmin.php" method="POST">
										<input type="text" class="form-control"
											    value="<?php echo $_GET['edit']; ?>" hidden="hidden" placeholder="masukkan nama" name="id">

										<div class="form-group form-inline">
											<div class="form-group col-lg-6 col-md-12 username">
												<input type="text" class="form-control"
												value="<?php echo $username; ?>" placeholder="Masukkan username" name="username" required oninvalid="this.setCustomValidity('Username Belum Diisi')" oninput="setCustomValidity('')">
											</div>
											

											<div class="form-group col-lg-6 col-md-12 password">
												<input type="text" class="form-control"
												value="<?php echo $password; ?>" placeholder="Masukkan Password" name="password" required oninvalid="this.setCustomValidity('Password Belum Diisi')" oninput="setCustomValidity('')">
											</div>
										</div>

										<div class="form-group form-inline">
											<div class="form-group col-lg-6 col-md-12 role">
												<select name="nama" value="<?php echo $nama; ?>">
													<?php
													$result=mysqli_query($con,"SELECT * FROM users_role");
													foreach ($result as $row) {
														//echo '<option value="'.$row['ID_lokasi'].'">'.$row['nama'].'</option>';
														 echo '<option value="'.$row['id'].'" ';
														 if($id==$row['id']){
															echo "selected";
														 	}
														 	echo '>'.$row['nama'].'</option>';
													}
												?>
												</select>
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
											<div class="form-group col-lg-6 col-md-12 username">
												<input type="text" class="form-control"
												value="" placeholder="Masukkan username" name="username" required oninvalid="this.setCustomValidity('Username Belum Diisi')" oninput="setCustomValidity('')">
											</div>
											

											<div class="form-group col-lg-6 col-md-12 password">
												<input type="text" class="form-control"
												value="" placeholder="Masukkan Password" name="password" required oninvalid="this.setCustomValidity('Password Belum Diisi')" oninput="setCustomValidity('')">
											</div>
										</div>



										<div class="form-group form-inline">
											<div class="form-group col-lg-6 col-md-12 lokasi">
												<!-- <input type="text" class="form-control"
												value="" placeholder="Masukkan Lokasi" name="id_lokasi" required oninvalid="this.setCustomValidity('Lokasi Belum Diisi')" oninput="setCustomValidity('')">
 -->
												<select name="nama" value="<?php echo $nama; ?>">
													<?php
													$result=mysqli_query($con,"SELECT * FROM users_role");
													foreach ($result as $row) {
														echo '<option value="'.$row['id'].'"> '.$row['nama'].'</option>';
													}
												?>
												</select>
											</div>
										</div>
											
										<button type="submit" name="save" class="primary-btn text-uppercase">Post</button>
									</form>


								</div>
								<?php } ?>

								<br>
									<form action="" method="GET">
										<div class="input-group mb-3">
											<input type="text" class="form-control" placeholder="Cari Berdasarkan username" name="username" aria-label="username"aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button type="submit" class="btn btn-primary" name="cari">Cari</button>
										</div>
									</div>
								</form>

								</div>
								<center>
									<table style="width:100%" cellpadding="10" border="1px">
									  <tr bgcolor="F6214B" style="color: white">
									  	<th><center>Username</center></th>
									    <th><center>Password</center></th>
									    <th><center>nama</center></th>
									    <th colspan="2"><center>status</center></th>
									  </tr>
													<?php
													$mysqli = new mysqli('localhost', 'root', '', 'psi') or die(mysql_error($mysqli));

													if(isset($_GET['cari'])){
														$cari = $_GET['username'];
														$data = $mysqli->query("SELECT users.id, users.role, users.username, users.password, users_role.nama FROM users INNER JOIN users_role WHERE users.role = users_role.id AND username like '%".$cari."%'");
													}else{
														//$mysqli = new mysqli('localhost', 'root', '', 'psi') or die(mysql_error($mysqli));
														$data = $mysqli->query("SELECT users.id, users.role, users.username, users.password, users_role.nama  FROM users INNER JOIN users_role WHERE users.role = users_role.id ORDER BY username ASC");
														}
														?>

									  				<?php while ($row = $data->fetch_assoc()): ?>
									  <tr>
									  	<td><?php echo $row['username']; ?></td>
									    <td><?php echo $row['password']; ?></td>
									    <td><?php echo $row['nama']; ?></td>
									    <td><a href="AdminTambahAkun.php?edit=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a></td>
									    <td><a href="prosesAdmin.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
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
