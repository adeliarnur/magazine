<?php

include "includes/db_connection.php";


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

			<?php	while ($result = $view->fetch_array()) { ?>
				<tr>

				<td><?php echo $result[1];?></td>
				<td><?php echo $result[2];?></td>
				<td><?php echo $result[3];?></td>
				<td><?php echo $result[4];?></td>
				<td><?php echo $result[0];?></td>

					</tr>
	<?php	}			?>

			</tr>

		</table>
	</center>
</div>



<?php

include "includes/footer.php";

?>
