<?php

include "includes/db_connection.php";

if (count($_POST) > 0){
	try {
		$judul = $_POST['judul'];
		$kategori = intval($_POST['kategori']);
		$thumbnail = "asdfa";
		// $thumbnail = $_POST['tumbnail'];
		$konten = addslashes($_POST['konten']);
		// print_r($kategori);
		// echo gettype($kategori);
		// die();

		$sql = "INSERT INTO `pra-bencana_konten` (`judul`, `konten`, `kategori`, `thumbnail`)
				VALUES (?, ?, ?, ?)";

		// $konten =  $db->real_escape_string($konten);

		// if ($db->querry($sql) === FALSE) {

		// }
		$stmt = $db->prepare($sql);
		$stmt->bind_param("ssis", $judul, $konten, $kategori, $thumbnail);

		if ($stmt->execute() === FALSE) {
			echo "Error: " . $sql . "<br>" . $db->error;
			die();
		}
	} catch(Exception $e){
		echo "gagal mengupload berita. error : " . $e->error;
		die();
	}
	$db->close();
}

function tambahJS() {
	?>
	<script src="summernote/summernote.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var markupStr = "isi konten";
			// $('#summernote').summernote('code', markupStr);
			$('#summernote').summernote({
				placeholder: 'Masukkan konten di sini',
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
			$("#summernote_konten").val(konten);
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
		<h3 class="text-center mb-3">Konten Baru Minimalisir Dampak Bencana</h3>
		<form id="konten-baru" method="post">
			<div class="form-group">
				<label for="inputJudul">Judul</label>
				<input type="text" class="form-control" id="inputJudul" name="judul" placeholder="Masukkan Judul">
				</div>

				<div class="form-group">
					<label for="inputJudul">Kategori</label>
					<select class="form-control" id="inputKategori" name="kategori">
						<option value="1">Persiapan Diri</option>
						<option value="2">Persiapan Di Dalam Rumah</option>
						<option value="3">Persiapan Di Luar Rumah</option>
					</select>
				</div>

				<div class="custom-file mb-3">
					<input type="file" name="thumbnail" class="custom-file-input" id="inputThumbnail">
					<label for="inputThumbnail" class="custom-file-label">Thumbnail</label>
				</div>

			<div class="form-group">
				<textarea id="summernote" class="form-control"></textarea>
				<input type="hidden" id="summernote_konten" name="konten">
			</div>
			<input class="btn btn-sm btn-primary" type="submit" value="Submit">
		</form>
	</div>
</div>

<?php

include "includes/footer.php";

?>