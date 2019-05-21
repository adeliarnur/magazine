<?php

include "includes/db_connection.php";

// if (count($_POST) > 0){
// 	try {
// 		$lokasi = $_POST['lokasi'] or die("Gagal mengecek lokasi di database");
//
// 		$tanggal = $_POST['tanggal'];
//
// 		$status = $_POST['status'];
//
//
// 		$keterangan = $_POST['keterangan'];
//
// 		$makanan = $_POST['id_makanan'];
//
//
// 		$sql = "INSERT INTO status_bencana (lokasi_bencana, tanggal_bencana, status_bencana, keterangan_bencana, id_makanan)
// 				VALUES ('".$lokasi."', '".$tanggal."', '".$status."', '".$keterangan."','".$makanan."')";
//
//
// 		$stmt = $db->prepare($sql) or die("Gagal mengecek user di database");
// 		// $stmt->bind_param("ssis", $lokasi, $tanggal, $status, $keterangan, $makanan);
//
// 		if ($stmt->execute() === FALSE) {
// 			echo "Error: " . $sql . "<br>" . $db->error;
// 			die();
// 		}
// 	} catch(Exception $e){
// 		echo "gagal mengupload berita. error : " . $e->error;
// 		die();
// 	}
// 	$db->close();
// }
?>


<?php
function tambahJS() {
	?>
	<script src="summernote/summernote.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var markupStr = "isi konten";
			// $('#summernote').summernote('code', markupStr);
			$('#summernote').summernote({
				placeholder: 'Masukkan Keterangan di sini',
				focus: true,
				code: markupStr
			});
		});
		$('#konten-baru').submit(function(){
			// $.ajax({
			// 	method: "POST",
			// 	url: "AdminMinimalisirDampakBencana.php",
			// 	data: { name: "John", location: "Boston" }
			// })
			// .done(function( msg ) {
			// 	alert( "Data Saved: " + msg );
			// });
			// alert('hello');
			var konten = $("#summernote").summernote('code');
			$("#summernote_keterangan").val(keterangan);
			return true;
		});
	</script>
	<?php
}

function tambahCSS() {
	?>
	<link rel="stylesheet" href="summernote/summernote.css">
	<?php
}

$sqlview = "SELECT makanan.lokasi as posko, lokasi_bencana, tanggal_bencana, status_bencana, keterangan_bencana, id_status_bencana FROM status_bencana JOIN makanan ON status_bencana.id_makanan=makanan.id_makanan";
$view = $db->query($sqlview);
// if ()) {
//     // $view = $view->fetch_array();
//     // print_r($kategori['kategori']);
//     // die();
// }

include "includes/header-admin.php";
?>

<div class="container mb-3">
	<div class="card p-3">
		<h3 class="text-center mb-3">Konten Baru Status Keadaan Bencana</h3>
		<form id="konten-baru" action="input-status.php " enctype="multi" method="post">
			<div class="form-group" >
				<label for="inputJudul">Tanggal</label>
				<input type="text" class="form-control" id="inputTanggal" name="tanggal" placeholder="Masukkan Tanggal dengan Format YYYY-MM-DD">
				</div>

				<div class="form-group">
					<label for="inputJudul">Lokasi</label>
					<input type="text" class="form-control" id="inputLokasi" name="lokasi" placeholder="Masukkan lokasi bencana">
					</div>

				<div class="form-group" action="input-status.php " enctype="multi" method="post">
					<label for="inputStatus">Status</label>
					<select class="form-control" id="inputStatus" name="status">
						<option value="Kritis">Kritis</option>
						<option value="Siaga 1">Siaga 1</option>
						<option value="Siaga 2">Siaga 2</option>
						<option value="Siaga 3">Siaga 3</option>
						<option value="Pemulihan">Pemulihan</option>
					</select>
				</div>

				<div class="form-group">
					<label for="inputStatus">Posko</label>
					<select class="form-control" id="inputPosko" name="id_makanan">
						<?php
						$sqlposko = "SELECT id_makanan, lokasi FROM makanan";
						if ($queryposko = $db->query($sqlposko)) {}
						while ($posko = $queryposko->fetch_array()) { ?>
						<option value="<?php echo $posko[0];?>"><?php echo $posko[1];?></option>
							<?php	}			?>
					</select>
				</div>

				<div class="form-group">
					<label for="inputJudul">Keterangan</label>
					<input type="text" class="form-control" id="inputKeterangan" name="keterangan" placeholder="Masukkan keterangan">
					</div>


			<input class="btn btn-sm btn-primary" type="submit" value="Submit">
		</form>
	</div>
	<center>
		<table style="width:100%" border="1px">
			<tr bgcolor="F6214B" style="color: white">
				<th width="350px"><center>Lokasi</center></th>
				<th width="100px"><center>Status</center></th>
				<th width="100px"><center>Tanggal</center></th>
				<th><center>Keterangan</center></th>
				<th><center>Posko</center></th>
				<th><center>Edit</center></th>
			</tr>

			<?php	while ($result = $view->fetch_array()) { ?>
				<tr>

				<td><?php echo $result[1];?></td>
				<td><?php echo $result[2];?></td>
				<td><?php echo $result[3];?></td>
				<td><?php echo $result[4];?></td>
				<td><?php echo $result[0];?></td>
				<td><button type="button" class="btn btn-danger"><a style="color : white" href="hapus-status.php? id=<?php echo $result[5]; ?>">Delete</a>
					</button>

					<button type="button" class="btn btn-success"><a style="color : white" href="edit-status.php? id=<?php echo $result[5]; ?>">Edit</button></td>

					</tr>
	<?php	}			?>

			</tr>

		</table>
	</center>
</div>



<?php

include "includes/footer.php";

?>
