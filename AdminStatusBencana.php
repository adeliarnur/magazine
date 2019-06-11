<?php

include "includes/db_connection.php";
require('konek.php');

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



include "includes/header-admin.php";
?>

<div class="container mb-3">
	<div class="card p-3">
		<h3 class="text-center mb-3">Konten Baru Status Keadaan Bencana</h3>
		<form id="konten-baru" action="input-status.php " enctype="multi" method="post">
			<div class="form-group" >
				<label for="inputJudul">Tanggal</label>
				<input type="date"  class="form-control" id="inputTanggal" name="tanggal" placeholder="Masukkan Tanggal dengan Format YYYY-MM-DD" required oninvalid="this.setCustomValidity('Tanggal Belum Diisi')" oninput="setCustomValidity('')">
				</div>

				<div class="form-group">
					<label for="inputJudul">Lokasi</label>
					<input type="text" class="form-control" id="inputLokasi" name="lokasi" placeholder="Masukkan lokasi bencana" required oninvalid="this.setCustomValidity('Lokasi Belum Diisi')" oninput="setCustomValidity('')">
					</div>

				<div class="form-group" action="input-status.php " enctype="multi" method="post">
					<label for="inputStatus">Status</label>
					<select class="form-control" id="inputStatus" name="status" required>
						<option value="Kritis">Kritis</option>
						<option value="Siaga 1">Siaga 1</option>
						<option value="Siaga 2">Siaga 2</option>
						<option value="Siaga 3">Siaga 3</option>
						<option value="Pemulihan">Pemulihan</option>
					</select>
				</div>

				<div class="form-group">
					<label for="inputStatus">Posko</label>
					<select class="form-control" id="inputPosko" name="id_lokasi" required>
						<?php
						$sqlposko = "SELECT id_lokasi, nama, provinsi, kecamatan, desa FROM lokasi";
						if ($queryposko = $con->query($sqlposko)) {}
						while ($posko = $queryposko->fetch_array()) { ?>
						<option value="<?php echo $posko[0];?>"><?php echo $posko[1];?>, <?php echo $posko[4];?>, <?php echo $posko[3];?>, <?php echo $posko[2];?></option>
							<?php	}			?>
					</select>
				</div>

				<div class="form-group">
					<label for="inputJudul">Keterangan</label>
					<input type="text"  class="form-control" id="inputKeterangan" name="keterangan" placeholder="Masukkan keterangan" required oninvalid="this.setCustomValidity('Keterangan Belum Diisi')" oninput="setCustomValidity('')">
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
			<?php
			$sqlview = "SELECT lokasi.id_lokasi, lokasi_bencana, tanggal_bencana, status_bencana, keterangan_bencana, id_status_bencana, lokasi.nama FROM status_bencana INNER JOIN lokasi ON status_bencana.id_lokasi=lokasi.id_lokasi";
			$view = $con->query($sqlview);
				while ($result = $view->fetch_array()) { ?>
				<tr>

				<td><?php echo $result[1];?></td>
				<td><?php echo $result[2];?></td>
				<td><?php echo $result[3];?></td>
				<td><?php echo $result[4];?></td>
				<td><?php echo $result[6];?></td>
				<td><button type="button" class="btn btn-danger"><a style="color : white" href="hapus-status.php? id=<?php echo $result[5]; ?>">Delete</a>
					</button>

					<button type="button" class="btn btn-success"><a style="color : white" href="edit-status.php? id=<?php echo $result[5]; ?>">Edit</button></td>

					</tr>
	<?php	}			?>

			</tr>

		</table>
	</center>
</div>
</div>
</div>



<?php

include "includes/footer.php";

?>
