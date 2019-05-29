<?php

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



include "includes/header.php";
?>

<div class="container mb-3">
	<div class="card p-3">
		<h3 class="text-center mb-3">Daftar Informasi Status Keadaan Bencana</h3>

	</div>
	<center>
		<table style="width:100%" border="1px">
			<tr bgcolor="F6214B" style="color: white">
				<th width="350px"><center>Lokasi</center></th>
				<th width="100px"><center>Status</center></th>
				<th width="100px"><center>Tanggal</center></th>
				<th><center>Keterangan</center></th>
				<th><center>Posko</center></th>
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
				<td><button type="button" class="btn btn-success"><a style="color : white" href="CadanganMakananPosko.php? id=<?php echo $result[0]; ?> " target="_blank"><?php echo $result[6];?></button></td>


					</tr>
	<?php	}			?>

			</tr>

		</table>
	</center>
</div>



<?php

include "includes/footer.php";

?>
