<!-- list icon : https://mdbootstrap.com/docs/jquery/content/icons-list/ -->
<?php include 'koneksi.php'; 
$query = "SELECT * FROM `drug` ";
$result =  mysqli_query($connection,$query);
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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/main.css">
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
/*		.search_icon:focus{
			outline:none;
		}
		.text_input{
			width: 100%;
			border-radius: 20px;
			outline: none;
			padding-left: 10px;

		}
		.text_input:focus{
			outline: none;
		}
*/
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
</head>
<body>
	<header>	
		<?php include "includes/header-admin.php"; ?>
		</header>


		<!-- HEADER -->
		<!-- KONTAIN?-->

		<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
			<div class="row">

				<div class="col-sm-12">
					<h1 style="text-align: center;">TABEL OBAT</h1>
				</div>
				<div class="col-sm-8">
					<div style="margin-top: 40px;margin-bottom: 10px;">
						<button class="btn btn-primary" data-toggle="modal" data-target="#modal_add_obat"><i class="fas fa-plus-circle"></i>     TAMBAH OBAT</button>
					</div>
				</div>
				<!-- m -->
			</div>



			<table class="table table-striped table-bordered">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No.</th>
						<th scope="col">JUDUL</th>
						<th scope="col">KETERANGAN</th>
						<th scope="col" style="text-align: center;">FOTO</th>
						<th scope="col" style="text-align: center;">-</th>
						<th scope="col" style="text-align: center;">-</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					if(mysqli_num_rows($result)>0){
						$no =1;
						while ($data = mysqli_fetch_array($result)) {
							?>
							<tr>
								<td style="text-align: center;"><?php echo $no ?></td>
								<td><?php echo $data["judul_obat"];?></td>
								<td><?php echo $data["deskr"];?></td>
								<td style="text-align: center;"><img src="<?php echo $data["dir_img_obat"];?>" style="width: 290px;height: 200px;"></td>
								<td style="text-align: center;">
									<a href="Admin_Obat_Delete_action.php? id=<?php echo $data['id']; ?>"><button type="button"  class="btn btn-danger">DELETE</button></a>
								</td>
								<td style="text-align: center;"><button type="button" data-toggle="modal" data-target="#modal_update<?php echo $data['id'] ?>" class="btn btn-primary">UPDATE</button>
								</td>


								<!-- UPDATE Obat -->


								<div class="modal fade" id="modal_update<?php echo $data['id'] ?>" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content" style="text-align: right;">

											<!-- Modal Header -->
											<div class="modal-header" style="text-align: center;">
												<h4 class="modal-title" >UPDATE SECTION (<?php echo $data['judul_obat']; ?>)</h4>
												<button type="button" class="close" data-dismiss="modal ">&times;</button>
											</div>

											<!-- Modal body -->
											<div class="modal-body">
												<form action="Admin_Obat_Update_action.php" enctype="multipart/form-data" method="POST" >
													<input type="text" name="id" value="<?php echo $data['id'] ?>" hidden>
													<div class="label_text">JUDUL</div>
													<input type="text" name="nama" placeholder="Judul Creating Tool" class="text_input" value="<?php echo $data['judul_obat'] ?>" required>
													<!-- <div class="label_text">BAHAN*</div> -->
													<!-- <input type="text" name="bahan" placeholder="Bahan 1, Bahan 2, Bahan 3" class="text_input" value="<?php echo $row['bahan_CT'] ?>" required> -->
													<!-- <div class="label_text">ALAT*</div> -->
													<!-- <input type="text" name="alat" placeholder="Alat 1, Alat 2, Alat 3" class="text_input" value="<?php echo $row['alat_CT'] ?>" required> -->
													<div class="label_text">DESKRIPSI*</div>
													<textarea name="keterangan" placeholder="Description" required class="text_input" rows="6"><?php echo $data['deskr'] ?></textarea>
													<div class="label_text">GAMBAR*</div>
													<div style="text-align: center; margin-top: 5px; margin-bottom: 5px;">
														<img src="<?php echo $data['dir_img_obat'] ?>" style="width: 180px; text-align: left;">
													</div>
													<input type="file" name="gambar" value="Upload" style="width: 100%;" accept="image/x-png,image/gif,image/jpeg">

													<button type="SUBMIT" class="btn btn-primary" style="margin-top: 20px;"><i class="fas fa-plus-circle"></i>       CONFRIM</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-top: 20px; text-align: center;">Close</button>
												</form>

											</div>


											<!-- Modal footer -->
											<div class="modal-footer">
											</div>

										</div>
									</div>
								</div>


								<!-- END UPDATE CT -->

								
							</tr>

							<?php $no++; 
						}
					}

					?>
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


		<?php include "includes/footer.php"; ?>
		<!-- FOOTER END -->
		<!-- MODAL START -->
		<!-- The Modal -->
		<div class="modal fade" id="modal_add_obat" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header" style="text-align: center;">
						<h4 class="modal-title" >TAMBAH OBAT</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body" style="text-align: right;">
						<!-- <div class="row" style="margin-top: 10px;"> -->
							<form action="Admin_Obat_Add_action.php" enctype="multipart/form-data" method="POST" >
							<div class="label_text" style=" padding-top: 5px;">NAMA</div>
							<div class="text"><input type="text" name="judul" class="text_input" style="text-transform: uppercase;" placeholder="Masukan Nama" ></div>
						<!-- </div> -->
						<!-- <div class="row"style="margin-top: 10px;"> -->
							<!-- <div class="col col-sm-4" style=" padding-top: 5px;">BENTUK</div> -->
							<!-- <div class="col col-md-8"><input type="text" name="" class="text_input"></div> -->
						<!-- </div> -->
						<!-- <div class="row"style="margin-top: 10px; " > -->
							<!-- <div class="col col-sm-4"  style=" padding-top: 5px;">WARNA</div> -->
							<!-- <div class="col col-md-8"><input type="text" name="" class="text_input"></div> -->
						<!-- </div>										 -->
						<!-- <div class="row"style="margin-top: 10px;"  style=" padding-top: 5px;"> -->
							<!-- <div class="col col-sm-4" style=" padding-top: 5px;">CARA MAKAN</div> -->
							<!-- <div class="col col-md-8"><input type="text" name="" class="text_input"></div> -->
						<!-- </div> -->
						<!-- <div class="row"style="margin-top: 10px;"> -->
							<div class="label_text" style=" padding-top: 5px;">KETERANGAN</div>
							<textarea type="text" name="keterangan" placeholder="Masukkan Keterangan Obat" class="text_input" required></textarea>
							<!-- <div class="col col-md-8"><input type="text" name="" class="text_input"></div> -->
						<!-- </div> -->
						<!-- <div class="row"style="margin-top: 10px;"> -->
							<div class="label_text" style=" padding-top: 5px;">GAMBAR</div>
							<!-- <input type="file" id="file-with-current" class="input-default-js"> -->
							<input type="file" name="gambar" value="Upload" style="width: 100%;" accept="image/x-png,image/gif,image/jpeg">

							<!-- <div class="col col-md-8"><input type="text" name="" class="text_input"></div> -->
						<!-- </div> -->
						<button type="SUBMIT" class="btn btn-primary" style="margin-top: 20px;"><i class="fas fa-plus-circle"></i>       CONFRIM</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-top: 20px; text-align: center;">Close</button>
							</form>
					</div>


					<!-- Modal footer -->
					<div class="modal-footer">
						<!-- <button type="button" class="btn btn-primary"><i class="fas fa-plus-circle"></i>       KONFRIM</button> -->
						<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
					</div>

				</div>
			</div>
		</div>
		<!-- MODAL END -->
		<!-- The Modal -->
		<div class="modal fade" id="modal_update" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header" style="text-align: center;">
						<h4 class="modal-title" >UPDATE</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<div class="row" style="margin-top: 10px;">
							<div class="col col-sm-4" style=" padding-top: 5px;">NAMA</div>
							<div class="col col-md-8"><input type="text" name="judul" class="text_input" style="text-transform: uppercase;"></div>
						</div>
						<div class="row"style="margin-top: 10px;">
							<div class="col col-sm-4" style=" padding-top: 5px;">BENTUK</div>
							<div class="col col-md-8"><input type="text" name="" class="text_input"></div>
						</div>
						<div class="row"style="margin-top: 10px; " >
							<div class="col col-sm-4"  style=" padding-top: 5px;">WARNA</div>
							<div class="col col-md-8"><input type="text" name="" class="text_input"></div>
						</div>										
						<div class="row"style="margin-top: 10px;"  style=" padding-top: 5px;">
							<div class="col col-sm-4" style=" padding-top: 5px;">CARA MAKAN</div>
							<div class="col col-md-8"><input type="text" name="" class="text_input"></div>
						</div>
						<div class="row"style="margin-top: 10px;">
							<div class="col col-sm-4" style=" padding-top: 5px;">KETERANGAN</div>
							<div class="col col-md-8"><input type="text" name="" class="text_input"></div>
						</div>
						<div class="row"style="margin-top: 10px;">
							<div class="col col-sm-4" style=" padding-top: 5px;">FOTO</div>
							<input type="file" id="file-with-current" class="input-default-js">

							<!-- <div class="col col-md-8"><input type="text" name="" class="text_input"></div> -->
						</div>
					</div>


					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-primary"><i class="fas fa-plus-circle"></i>       CONFRIM</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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