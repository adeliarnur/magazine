<?php
include "includes/db_connection.php";

if ($_GET['edit']) {
	global $konten;
	$id_kategori = intval($_GET['edit']);
	$sql = "SELECT * FROM `pra-bencana_konten`
					WHERE id=$id_kategori";

	if ($result = $db->query($sql)) {
	    $konten = $result->fetch_array();
	} else {
		$konten = false;
	}
}

if (count($_POST) > 0){
	try {
		$judul = $_POST['judul'];
		$kategori = intval($_POST['kategori']);
		$konten = $_POST['konten'];

		$upload_image = true;
		$image = $_FILES['thumbnail']['name'];

		// image file directory
		$target = "img/prabencana_thumbnail/" . basename($image);

		// check image
		if (getimagesize($_FILES['thumbnail']["tmp_name"]) === false) {
			$upload_image = false;
		}

		// check image
		$allowed_ext = ['jpg', 'png', 'bmp', 'jpeg'];
		// print_r(basename($image));
		// die();
		$ext = end(explode('.', basename($image)));
		$ext = strtolower($ext);
		if(!in_array($ext, $allowed_ext)){
			$upload_image = false;
		}

		// uploading image
		if (!move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target)) {
			$upload_image = false;
		}

		if (!$upload_image) {
			echo "gagal mengupload thumbnail";
			die();
		}

		$thumbnail = $target;

		// $konten = addslashes($_POST['konten']);

		$sql = "INSERT INTO `pra-bencana_konten` (`judul`, `konten`, `kategori`, `thumbnail`)
				VALUES (?, ?, ?, ?)";

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
	header('location: AdminMinimalisirDampakBencana.php');
}

function tambahJS() {
	?>
	<script src="summernote/summernote-bs4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var markupStr = "<?php if($konten) echo $konten['konten']; ?>";
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
	<link rel="stylesheet" href="summernote/summernote-bs4.css">
	<?php
}


include "includes/header-admin.php";
?>

<div class="container mb-3">
	<div class="card p-3">
		<h3 class="text-center mb-3">Konten Baru Minimalisir Dampak Bencana</h3>
		<form id="konten-baru" method="post" enctype="multipart/form-data">
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
			<input class="btn btn-sm btn-primary" type="submit" name="submit" value="Submit">
		</form>
	</div>
</div>

<?php

include "includes/footer.php";

?>
