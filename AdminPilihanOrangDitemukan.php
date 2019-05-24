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
			<?php include 'Adminheader.php'; ?>
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
								<h4 class="cat-title">Cari Orang Ditemukan</h4>


								<div class="comment-form">
									<h4>Input Daftar Orang Ditemukan</h4>
										
										<?php 
										if(isset($_GET['edit'])){ 

										$mysqli = new mysqli('localhost','root','','psi') or die(mysql_error($mysqli));
										$res=mysqli_query($mysqli,"SELECT * FROM dataorang WHERE ID_Orang='".$_GET['edit']."'");
										$hasil=mysqli_fetch_assoc($res);


										$nama = $hasil['Nama'];
										$status = $hasil['status'];
										$nilai = $hasil['nilai'];
										$ayah = $hasil['NamaAyah'];
										$ibu = $hasil['NamaIbu'];
										$jk = $hasil['Gender'];
										$usia = $hasil['Usia'];
										$kota = $hasil['TempatLahir'];
										$alamat = $hasil['AlamatAkhir'];
										$negara = $hasil['Kewarganegaraan'];
										$deskrip = $hasil['Deskripsi'];

										?>

<!-- //////////////////////////////////////////////////////////////update data -->
								<form action="prosesOrgDitemukan.php" method="POST">						
										<input type="text" class="form-control" 
											    value="<?php echo $_GET['edit']; ?>" hidden="hidden" placeholder="masukkan nama" name="id" >
										
										<div class="form-group form-inline">
											    <input type="text" class="form-control" 
											    value="<?php echo $nama; ?>" placeholder="masukkan nama" name="nama" required oninvalid="this.setCustomValidity('Nama Belum Diisi')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group form-inline">
											<select name="stat" value="<?php echo $status; ?>">
												<option value="Ditemukan" <?php if($status=="1"){echo "selected";} ?> >Ditemukan</option>
												<option value="Ditemukan" <?php if($status=="2"){echo "selected";} ?> >Ditemukan</option>
											</select>
										</div>

										<div class="form-group form-inline">
											<select name="nilai" value="<?php echo $nilai; ?>">
												<option value="BelumNilai" <?php if($nilai=="0"){echo "selected";} ?> >Belum Dinilai</option>
												<option value="Diterima" <?php if($nilai=="1"){echo "selected";} ?> >Diterima</option>
												<option value="Ditolak" <?php if($nilai=="2"){echo "selected";} ?> >Ditolak</option>
											</select>
										</div>

										<div class="form-group form-inline">
											<input type="text" 
											value="<?php echo $ayah; ?>" class="form-control" placeholder="Masukkan Nama Ayah" name="namaayah" required oninvalid="this.setCustomValidity('Nama Ayah Belum Diisi')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group form-inline">
											<input type="text" 
											value="<?php echo $ibu; ?>" class="form-control" placeholder="Masukkan Nama Ibu" name="namaibu" required oninvalid="this.setCustomValidity('Nama Ibu Belum Diisi')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group form-inline">
											<select name="gender" value="<?php echo $jk; ?>">
												<option value="Laki-laki" <?php if($jk=="Laki-laki"){ echo "selected"; } ?> >Laki-laki</option>
												<option value="Perempuan" <?php if($jk=="Perempuan"){ echo "selected"; } ?> >Perempuan</option>
											</select>
										</div>

										<div class="form-group form-inline">
											<input type="text" 
											value="<?php echo $usia; ?>" class="form-control"  placeholder="Usia" name="usia" required oninvalid="this.setCustomValidity('Usia Belum Diisi')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group form-inline">
											<input type="text" 
											value="<?php echo $kota; ?>" class="form-control" placeholder="Kota Lahir" name="kota" required oninvalid="this.setCustomValidity('Kota Lahir Belum Diisi')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group form-inline">
											<input type="text" 
											value="<?php echo $alamat; ?>" class="form-control" placeholder="Alamat Ditemukan" name="alamat" required oninvalid="this.setCustomValidity('Alamat Ditemukan Belum Diisi')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group form-inline">
											<input type="text" 
											value="<?php echo $negara; ?>" class="form-control" placeholder ="Kewarganegaraan" name="negara" required oninvalid="this.setCustomValidity('Negara Belum Diisi')" oninput="setCustomValidity('')">
										</div>
										<div class="form-group">
											<textarea class="form-control mb-10" 
											rows="5" placeholder="Deskripsi Orang Ditemukan" required oninvalid="this.setCustomValidity('Deskripsi Belum Diisi')" oninput="setCustomValidity('')" onblur="this.placeholder = 'Deskripsi Orang Ditemukan'" name="deskripsi"><?php echo $deskrip; ?></textarea>
										</div>
										<button type="submit" class="primary-btn text-uppercase" name="update">Post</button>
									</form>

								</div>


											<?php }
											else{ ?>


<!-- ///////////////////////////////////////////////////////////////////////////save data -->

										<form action="prosesOrgDitemukan.php" method="POST">
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
											<select name="nilai" value="<?php echo $nilai; ?>">
												<?php
													$result=mysqli_query($con,"SELECT * FROM penilaian");
													foreach ($result as $row) {
														echo '<option value="'.$row['id_nilai'].'"> '.$row['id_nilai']." - ".$row['nilai_status'].'</option>';
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
											value="" class="form-control" placeholder="Usia" name="usia" required oninvalid="this.setCustomValidity('Usia Belum Diisi')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group form-inline">
											<input type="text" 
											value="" class="form-control" required oninvalid="this.setCustomValidity('Kota Lahir Belum Diisi')" oninput="setCustomValidity('')"  placeholder="Kota Lahir" name="kota">
										</div>

										<div class="form-group form-inline">
											<input type="text" 
											value="" class="form-control" required oninvalid="this.setCustomValidity('Alamat Ditemukan Belum Diisi')" oninput="setCustomValidity('')" placeholder="Alamat Ditemukan" name="alamat">
										</div>

										<div class="form-group form-inline">
											<input type="text" 
											value="" class="form-control" required oninvalid="this.setCustomValidity('Negara Belum Diisi')" oninput="setCustomValidity('')" placeholder ="Kewarganegaraan" name="negara">
										</div>


										<div class="form-group">
											<textarea class="form-control mb-10" 
											value="" rows="5" placeholder="Deskripsi Orang Ditemukan" required oninvalid="this.setCustomValidity('Deskripsi Belum Diisi')" oninput="setCustomValidity('')" onblur="this.placeholder = 'Deskripsi Orang Ditemukan'" name="deskripsi"></textarea>
										</div>

										<button type="submit" class="primary-btn text-uppercase" name="save">Post</button>
									</form>


<!-- //////////////////////////////////////////////////////////////////////////read data	 -->								
								</div>

							<?php } ?>
								<br>
								<form action="" method="GET">
									<div class="input-group mb-3">
										<input type="text" class="form-control" placeholder="Cari Orang" name="namaOrang" aria-label="Orang Ditemukan" aria-describedby="basic-addon2">
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
																$data = $mysqli->query("SELECT dataorang.ID_Orang, dataorang.Nama, penilaian.nilai_status, dataorang.NamaAyah, dataorang.NamaIbu, dataorang.Gender, dataorang.Usia, dataorang.TempatLahir, dataorang.AlamatAkhir, dataorang.Kewarganegaraan, dataorang.Deskripsi, dataorang.Tanggal FROM dataorang, penilaian WHERE dataorang.nilai = penilaian.id_nilai AND status ='1' AND Nama like '%".$cari."%'");
															}else{
																//$mysqli = new mysqli('localhost', 'root', '', 'psi') or die(mysql_error($mysqli));
////////////////////////////////////////////////////////////////////massukkan id orangnya
																$data = $mysqli->query("SELECT dataorang.ID_Orang, dataorang.Nama, penilaian.nilai_status, dataorang.NamaAyah, dataorang.NamaIbu, dataorang.Gender, dataorang.Usia, dataorang.TempatLahir, dataorang.AlamatAkhir, dataorang.Kewarganegaraan, dataorang.Deskripsi, dataorang.Tanggal FROM dataorang INNER JOIN penilaian WHERE dataorang.nilai = penilaian.id_nilai AND status ='1'");
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
															    <th style="padding-right: 40px">Alamat Ditemukan</th>
															    <th><?php echo $row['AlamatAkhir']; ?></th>
												  			</tr>
												  			<tr>
															    <th style="padding-right: 40px">Kewarganegaraan</th>
															    <th><?php echo $row['Kewarganegaraan']; ?></th>
												  			</tr>
												  			<tr>
															    <th style="padding-right: 40px">Tanggal Pembuatan</th>
															    <th><?php echo $row['Tanggal']; ?></th>
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
														<a href="AdminPilihanOrangDitemukan.php?edit=<?php echo $row['ID_Orang']; ?>" class="btn btn-success">Edit</a>
														<a href="prosesOrgDitemukan.php?delete=<?php echo $row['ID_Orang']; ?>" class="btn btn-danger">Delete</a>
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