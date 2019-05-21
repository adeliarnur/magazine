<?php

include "includes/db_connection.php";
$id = $_GET['id'];
?>

<?php
if (count($_POST) > 0){
	try {
		$lokasi = $_POST['lokasi'] or die("Gagal mengecek lokasi di database");

		$tanggal = $_POST['tanggal'];

		$status = $_POST['status'];


		$keterangan = $_POST['keterangan'];

		$makanan = $_POST['id_makanan'];


		$sql = "INSERT INTO status_bencana (lokasi_bencana, tanggal_bencana, status_bencana, keterangan_bencana, id_makanan)
				VALUES ('".$lokasi."', '".$tanggal."', '".$status."', '".$keterangan."','".$makanan."')";


		$stmt = $db->prepare($sql) or die("Gagal mengecek data lokasi  di database");
		// $stmt->bind_param("ssis", $lokasi, $tanggal, $status, $keterangan, $makanan);

		if ($stmt->execute() === FALSE) {
			echo "Error: " . $sql . "<br>" . $db->error;
			die();
		}
	} catch(Exception $e){
		echo "gagal mengupload berita. error : " . $e->error;
		die();
	}
	$db->close();
} ?>


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

$queryedit=mysqli_query($db,"SELECT * FROM status_bencana WHERE id_status_bencana='$id'")or die("Gagal delete");
$view = $queryedit->fetch_array();
// if ()) {
//     // $view = $view->fetch_array();
//     // print_r($kategori['kategori']);
//     // die();
// }

include "includes/header-admin.php";
?>

<div class="container mb-3">
	<div class="card p-3">
		<h3 class="text-center mb-3">Edit Konten Status Keadaan Bencana</h3>
		<form id="konten-baru" method="post" action="edit-status-button.php? id=<?php echo $id; ?>">
			<div class="form-group">
				<label for="inputJudul">Tanggal</label>
				<input type="text" class="form-control" id="inputTanggal" name="tanggal" placeholder="<?php echo $view[2];?>">
				</div>

				<div class="form-group">
					<label for="inputJudul">Lokasi</label>
					<input type="text" class="form-control" id="inputLokasi" name="lokasi" placeholder="<?php echo $view[1];?>">
					</div>

				<div class="form-group">
					<label for="inputStatus">Status</label>
					<select class="form-control" id="inputStatus" name="status"  placeholder="<?php echo $view[2];?>">
						<option value="Kritis">Kritis</option>
						<option value="Siaga 1">Siaga 1</option>
						<option value="Siaga 2">Siaga 2</option>
						<option value="Siaga 3">Siaga 3</option>
						<option value="Pemulihan">Pemulihan</option>
					</select>
				</div>

				<div class="form-group">
					<label for="inputStatus">Posko</label>
					<select class="form-control" id="inputPosko" name="id_makanan" placeholder="<?php echo $view[3];?>">
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
					<input type="text" class="form-control" id="inputKeterangan" name="keterangan" placeholder="<?php echo $view[4];?>">
					</div>


			<input class="btn btn-sm btn-primary" type="submit" value="Edit" >
		</form>
	</div>
